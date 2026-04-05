<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::orderBy('sort_order')->get();
        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'sort_order' => 'nullable|integer',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'features' => 'nullable|array',
            'challenges' => 'nullable|array',
            'how_it_works' => 'nullable|array',
            'roi_metrics' => 'nullable|array',
            'hero_image' => 'nullable|image|max:5120',
            'page_content' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['features'] = $validated['features'] ?? [];
        $validated['challenges'] = $validated['challenges'] ?? [];
        $validated['how_it_works'] = $validated['how_it_works'] ?? [];
        $validated['roi_metrics'] = $validated['roi_metrics'] ?? [];
        $validated['page_content'] = $this->cleanPageContent($validated['page_content'] ?? []);

        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request->file('hero_image')->store('solutions', 'public');
        }

        $screenshotKeys = $this->getScreenshotKeys($validated['slug']);
        $validated['screenshots'] = $this->handleScreenshots($request, [], $screenshotKeys);

        // Remove screenshot upload fields from validated data
        foreach ($screenshotKeys as $key) {
            unset($validated["screenshot_{$key}"]);
        }

        // Ensure unique slug
        $count = Solution::where('slug', $validated['slug'])->count();
        if ($count > 0) {
            $validated['slug'] .= '-' . ($count + 1);
        }

        Solution::create($validated);
        return redirect()->route('admin.solutions.index')->with('success', 'Solution created successfully.');
    }

    public function edit(Solution $solution)
    {
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $screenshotKeys = $this->getScreenshotKeys($solution->slug);

        $rules = [
            'title' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'sort_order' => 'nullable|integer',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'features' => 'nullable|array',
            'challenges' => 'nullable|array',
            'how_it_works' => 'nullable|array',
            'roi_metrics' => 'nullable|array',
            'hero_image' => 'nullable|image|max:5120',
            'page_content' => 'nullable|array',
        ];
        foreach ($screenshotKeys as $key) {
            $rules["screenshot_{$key}"] = 'nullable|image|max:5120';
        }

        $validated = $request->validate($rules);

        $validated['features'] = $validated['features'] ?? [];
        $validated['challenges'] = $validated['challenges'] ?? [];
        $validated['how_it_works'] = $validated['how_it_works'] ?? [];
        $validated['roi_metrics'] = $validated['roi_metrics'] ?? [];
        $validated['page_content'] = $this->cleanPageContent($validated['page_content'] ?? []);

        if ($request->hasFile('hero_image')) {
            if ($solution->hero_image) {
                Storage::disk('public')->delete($solution->hero_image);
            }
            $validated['hero_image'] = $request->file('hero_image')->store('solutions', 'public');
        } elseif ($request->input('remove_hero_image') === '1') {
            if ($solution->hero_image) {
                Storage::disk('public')->delete($solution->hero_image);
            }
            $validated['hero_image'] = null;
        }

        $validated['screenshots'] = $this->handleScreenshots($request, $solution->screenshots ?? [], $screenshotKeys);

        // Handle screenshot removals
        foreach ($screenshotKeys as $key) {
            if ($request->input("remove_screenshot_{$key}") === '1') {
                $existing = $validated['screenshots'][$key] ?? null;
                if ($existing) {
                    Storage::disk('public')->delete($existing);
                }
                $validated['screenshots'][$key] = null;
            }
        }

        // Remove screenshot upload fields from validated data
        foreach ($screenshotKeys as $key) {
            unset($validated["screenshot_{$key}"]);
        }

        $solution->update($validated);
        return redirect()->route('admin.solutions.index')->with('success', 'Solution updated.');
    }

    public function destroy(Solution $solution)
    {
        // Clean up screenshots
        if ($solution->screenshots) {
            foreach ($solution->screenshots as $path) {
                if ($path) {
                    Storage::disk('public')->delete($path);
                }
            }
        }
        if ($solution->hero_image) {
            Storage::disk('public')->delete($solution->hero_image);
        }

        $solution->delete();
        return redirect()->route('admin.solutions.index')->with('success', 'Solution deleted.');
    }

    private function handleScreenshots(Request $request, array $existing, array $keys = null): array
    {
        $screenshots = $existing;
        $keys = $keys ?? ['dashboard', 'work_programs', 'risk', 'compliance'];

        foreach ($keys as $key) {
            if ($request->hasFile("screenshot_{$key}")) {
                // Delete old
                if (!empty($screenshots[$key])) {
                    Storage::disk('public')->delete($screenshots[$key]);
                }
                $screenshots[$key] = $request->file("screenshot_{$key}")->store('solutions/screenshots', 'public');
            }
        }

        return $screenshots;
    }

    private function getScreenshotKeys(string $slug): array
    {
        return match($slug) {
            'enterprise-risk-management' => ['dashboard', 'simulation', 'heatmap'],
            default => ['dashboard', 'work_programs', 'risk', 'compliance'],
        };
    }

    private function cleanPageContent(array $content): array
    {
        // Remove empty entries from arrays
        $arrayKeys = [
            'selling_points', 'lifecycle_phases', 'work_programs',
            'ai_capabilities', 'risk_features', 'compliance_frameworks',
            'report_workflow', 'committee_features', 'role_hierarchy',
            'glance_stats',
        ];

        foreach ($arrayKeys as $key) {
            if (isset($content[$key]) && is_array($content[$key])) {
                $content[$key] = array_values(array_filter($content[$key], function ($item) {
                    if (is_array($item)) {
                        return !empty(array_filter($item));
                    }
                    return !empty($item);
                }));
            }
        }

        // Handle finding_types and security_features as simple string arrays
        foreach (['finding_types', 'security_features'] as $key) {
            if (isset($content[$key]) && is_string($content[$key])) {
                $content[$key] = array_values(array_filter(array_map('trim', explode("\n", $content[$key]))));
            }
        }

        return $content;
    }
}
