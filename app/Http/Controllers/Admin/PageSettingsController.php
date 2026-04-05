<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageSettingsController extends Controller
{
    /**
     * Pages index — shows list of editable page groups + hero slides link.
     */
    public function index()
    {
        $pageGroups = [
            'homepage'          => ['label' => 'Homepage', 'desc' => 'Announcement bar, section headings, images'],
            'page_platform'     => ['label' => 'Platform Overview', 'desc' => 'Hero text, architecture and integration images'],
            'page_platform_ai'  => ['label' => 'Platform AI', 'desc' => 'AI page hero text and dashboard screenshot'],
            'page_security'     => ['label' => 'Security & Trust', 'desc' => 'Security page hero text'],
            'page_integrations' => ['label' => 'Integrations', 'desc' => 'Integrations page hero text'],
            'page_pricing'      => ['label' => 'Pricing', 'desc' => 'Pricing headline and description'],
            'page_demo'         => ['label' => 'Demo Page', 'desc' => 'Demo form headline and description'],
            'page_tprm'         => ['label' => 'Third Party Risk (TPRM)', 'desc' => 'TPRM page hero text and dashboard screenshot'],
            'page_about'        => ['label' => 'About', 'desc' => 'Hero text, mission, vision'],
            'page_careers'      => ['label' => 'Careers', 'desc' => 'Careers page hero text'],
            'page_customers'    => ['label' => 'Customers', 'desc' => 'Customers page hero text'],
            'page_partners'     => ['label' => 'Partners', 'desc' => 'Partners page hero text'],
            'page_whitepapers'  => ['label' => 'Whitepapers', 'desc' => 'Whitepapers page hero text'],
            'page_cbn_hub'      => ['label' => 'CBN Hub', 'desc' => 'CBN Hub page hero text'],
            'page_vs_diligent'  => ['label' => 'vs Diligent', 'desc' => 'Comparison page hero text'],
            'page_vs_archer'    => ['label' => 'vs Archer', 'desc' => 'Comparison page hero text'],
            'page_privacy'      => ['label' => 'Privacy Policy', 'desc' => 'Privacy policy content'],
            'page_terms'        => ['label' => 'Terms of Service', 'desc' => 'Terms of service content'],
        ];

        return view('admin.pages.index', compact('pageGroups'));
    }

    /**
     * Edit settings for a specific page group.
     */
    public function edit(string $group)
    {
        $settings = Setting::where('group', $group)->orderBy('id')->get();

        if ($settings->isEmpty()) {
            abort(404, 'No settings found for this page group.');
        }

        $labels = [
            'homepage' => 'Homepage', 'page_platform' => 'Platform Overview',
            'page_platform_ai' => 'Platform AI', 'page_security' => 'Security & Trust',
            'page_integrations' => 'Integrations', 'page_pricing' => 'Pricing',
            'page_demo' => 'Demo Page', 'page_tprm' => 'Third Party Risk (TPRM)',
            'page_about' => 'About',
            'page_careers' => 'Careers', 'page_customers' => 'Customers',
            'page_partners' => 'Partners', 'page_whitepapers' => 'Whitepapers',
            'page_cbn_hub' => 'CBN Hub', 'page_vs_diligent' => 'vs Diligent',
            'page_vs_archer' => 'vs Archer', 'page_privacy' => 'Privacy Policy',
            'page_terms' => 'Terms of Service',
        ];

        return view('admin.pages.edit', [
            'settings' => $settings,
            'group' => $group,
            'groupLabel' => $labels[$group] ?? ucfirst($group),
        ]);
    }

    /**
     * Update settings for a page group.
     */
    public function update(Request $request, string $group)
    {
        // Handle image removals
        foreach ($request->all() as $key => $value) {
            if (str_starts_with($key, 'remove_image_') && $value === '1') {
                $settingKey = str_replace('remove_image_', '', $key);
                $setting = Setting::where('key', $settingKey)->where('group', $group)->first();
                if ($setting && $setting->value) {
                    Storage::disk('public')->delete($setting->value);
                    Setting::set($settingKey, '', $group, 'image');
                }
            }
        }

        foreach ($request->except('_token', '_method') as $key => $value) {
            if ($request->hasFile($key) || str_starts_with($key, 'remove_image_')) {
                continue;
            }
            $setting = Setting::where('key', $key)->where('group', $group)->first();
            if ($setting) {
                Setting::set($key, $value, $group, $setting->type ?? 'text');
            }
        }

        // Handle file uploads
        foreach ($request->allFiles() as $key => $file) {
            $oldSetting = Setting::where('key', $key)->where('group', $group)->first();
            if ($oldSetting && $oldSetting->value) {
                Storage::disk('public')->delete($oldSetting->value);
            }
            $path = $file->store('pages', 'public');
            Setting::set($key, $path, $group, 'image');
        }

        return back()->with('success', 'Page content updated successfully.');
    }

    /**
     * Hero slides manager.
     */
    public function heroSlides()
    {
        $slides = json_decode(Setting::get('hero_slides', '[]'), true) ?: [];
        return view('admin.pages.hero-slides', compact('slides'));
    }

    /**
     * Save hero slides.
     */
    public function updateHeroSlides(Request $request)
    {
        $slides = [];
        $slideData = $request->input('slides', []);

        foreach ($slideData as $i => $slide) {
            $entry = [
                'title' => $slide['title'] ?? '',
                'subtitle' => $slide['subtitle'] ?? '',
                'badge' => $slide['badge'] ?? '',
                'cta_text' => $slide['cta_text'] ?? '',
                'cta_url' => $slide['cta_url'] ?? '/demo',
                'secondary_cta_text' => $slide['secondary_cta_text'] ?? '',
                'secondary_cta_url' => $slide['secondary_cta_url'] ?? '/platform',
                'bg_image' => $slide['existing_bg_image'] ?? '',
            ];

            // Handle new featured image upload
            if ($request->hasFile("slides.{$i}.bg_image")) {
                if (!empty($entry['bg_image'])) {
                    Storage::disk('public')->delete($entry['bg_image']);
                }
                $entry['bg_image'] = $request->file("slides.{$i}.bg_image")->store('hero', 'public');
            }

            // Handle image removal
            if (!empty($slide['remove_bg_image']) && $slide['remove_bg_image'] === '1' && !$request->hasFile("slides.{$i}.bg_image")) {
                if (!empty($entry['bg_image'])) {
                    Storage::disk('public')->delete($entry['bg_image']);
                }
                $entry['bg_image'] = '';
            }

            // Only add non-empty slides
            if (!empty($entry['title'])) {
                $slides[] = $entry;
            }
        }

        Setting::set('hero_slides', json_encode($slides), 'homepage', 'json');

        return back()->with('success', 'Hero slides updated successfully.');
    }
}
