<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $solutions = Solution::published()->get();
        $testimonials = Testimonial::active()->featured()->get();
        $partners = Partner::active()->where('type', 'client')->get();
        $latestPosts = Post::published()->latest('published_at')->take(3)->get();

        return view('public.home', compact('solutions', 'testimonials', 'partners', 'latestPosts'));
    }
}
