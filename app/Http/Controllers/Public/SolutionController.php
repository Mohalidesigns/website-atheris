<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Solution;

class SolutionController extends Controller
{
    public function show(string $slug)
    {
        $solution = Solution::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $otherSolutions = Solution::published()->where('id', '!=', $solution->id)->get();

        // Dedicated views for solutions with rich custom content
        $dedicatedViews = ['audit-management', 'esg-management', 'enterprise-risk-management'];
        if (in_array($slug, $dedicatedViews)) {
            return view("public.solutions.{$slug}", compact('solution', 'otherSolutions'));
        }

        return view('public.solutions.show', compact('solution', 'otherSolutions'));
    }
}
