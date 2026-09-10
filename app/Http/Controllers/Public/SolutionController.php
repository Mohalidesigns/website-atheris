<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Solution;

class SolutionController extends Controller
{
    public function show(string $slug)
    {
        $solution = Solution::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $otherSolutions = Solution::published()
            ->where('id', '!=', $solution->id)
            ->select('id', 'slug', 'title', 'description')
            ->get();

        // Dedicated views for solutions with rich custom content
        if (view()->exists("public.solutions.{$slug}")) {
            return view("public.solutions.{$slug}", compact('solution', 'otherSolutions'));
        }

        return view('public.solutions.show', compact('solution', 'otherSolutions'));
    }
}
