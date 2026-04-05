<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->with(['author', 'category'])
            ->latest('published_at')
            ->paginate(9);

        $categories = Category::withCount(['posts' => function ($q) {
            $q->where('status', 'published');
        }])->get();

        return view('public.blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->with(['author', 'category'])->firstOrFail();
        $post->increment('view_count');
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->where('category_id', $post->category_id)
            ->take(3)->get();

        return view('public.blog.show', compact('post', 'relatedPosts'));
    }

    public function category(string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::published()
            ->where('category_id', $category->id)
            ->with(['author'])
            ->latest('published_at')
            ->paginate(9);

        $categories = Category::withCount(['posts' => fn($q) => $q->where('status', 'published')])->get();

        return view('public.blog.index', compact('posts', 'categories', 'category'));
    }
}
