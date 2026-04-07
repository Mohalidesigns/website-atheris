<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('sort_order')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'hero_image' => 'nullable|image|max:5120',
            'screenshot_1' => 'nullable|image|max:5120',
            'screenshot_2' => 'nullable|image|max:5120',
            'screenshot_3' => 'nullable|image|max:5120',
            'screenshot_1_caption' => 'nullable|string|max:255',
            'screenshot_2_caption' => 'nullable|string|max:255',
            'screenshot_3_caption' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'features.*.title' => 'nullable|string|max:255',
            'features.*.desc' => 'nullable|string',
            'stats' => 'nullable|array',
            'stats.*.metric' => 'nullable|string|max:50',
            'stats.*.label' => 'nullable|string|max:255',
            'how_it_works' => 'nullable|array',
            'how_it_works.*.step' => 'nullable|string|max:10',
            'how_it_works.*.title' => 'nullable|string|max:255',
            'how_it_works.*.desc' => 'nullable|string',
            'challenges' => 'nullable|array',
            'challenges.*.title' => 'nullable|string|max:255',
            'challenges.*.desc' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published',
            'sort_order' => 'nullable|integer',
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
        $validated['slug'] = $slug;

        // Handle image uploads
        foreach (['hero_image', 'screenshot_1', 'screenshot_2', 'screenshot_3'] as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('products', 'public');
            } else {
                unset($validated[$field]);
            }
        }

        // Clean empty array entries
        foreach (['features', 'stats', 'how_it_works', 'challenges'] as $field) {
            if (isset($validated[$field])) {
                $validated[$field] = array_values(array_filter($validated[$field], fn($item) => !empty($item['title'] ?? $item['metric'] ?? $item['step'] ?? '')));
            }
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:100',
            'hero_image' => 'nullable|image|max:5120',
            'screenshot_1' => 'nullable|image|max:5120',
            'screenshot_2' => 'nullable|image|max:5120',
            'screenshot_3' => 'nullable|image|max:5120',
            'screenshot_1_caption' => 'nullable|string|max:255',
            'screenshot_2_caption' => 'nullable|string|max:255',
            'screenshot_3_caption' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'features.*.title' => 'nullable|string|max:255',
            'features.*.desc' => 'nullable|string',
            'stats' => 'nullable|array',
            'stats.*.metric' => 'nullable|string|max:50',
            'stats.*.label' => 'nullable|string|max:255',
            'how_it_works' => 'nullable|array',
            'how_it_works.*.step' => 'nullable|string|max:10',
            'how_it_works.*.title' => 'nullable|string|max:255',
            'how_it_works.*.desc' => 'nullable|string',
            'challenges' => 'nullable|array',
            'challenges.*.title' => 'nullable|string|max:255',
            'challenges.*.desc' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published',
            'sort_order' => 'nullable|integer',
        ]);

        // Handle image uploads with old file cleanup
        foreach (['hero_image', 'screenshot_1', 'screenshot_2', 'screenshot_3'] as $field) {
            if ($request->hasFile($field)) {
                if ($product->$field) {
                    Storage::disk('public')->delete($product->$field);
                }
                $validated[$field] = $request->file($field)->store('products', 'public');
            } elseif ($request->boolean("remove_$field")) {
                if ($product->$field) {
                    Storage::disk('public')->delete($product->$field);
                }
                $validated[$field] = null;
            } else {
                unset($validated[$field]);
            }
        }

        // Clean empty array entries
        foreach (['features', 'stats', 'how_it_works', 'challenges'] as $field) {
            if (isset($validated[$field])) {
                $validated[$field] = array_values(array_filter($validated[$field], fn($item) => !empty($item['title'] ?? $item['metric'] ?? $item['step'] ?? '')));
            }
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        foreach (['hero_image', 'screenshot_1', 'screenshot_2', 'screenshot_3'] as $field) {
            if ($product->$field) {
                Storage::disk('public')->delete($product->$field);
            }
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
