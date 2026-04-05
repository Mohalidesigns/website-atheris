<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Lead;
use App\Models\Page;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('status', 'published')->count(),
            'total_leads' => Lead::count(),
            'new_leads' => Lead::where('status', 'new')->count(),
            'total_pages' => Page::count(),
            'total_views' => Post::sum('view_count'),
        ];

        $recentLeads = Lead::latest()->take(10)->get();
        $recentPosts = Post::with('author')->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentLeads', 'recentPosts'));
    }
}
