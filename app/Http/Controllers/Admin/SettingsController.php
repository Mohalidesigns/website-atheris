<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token', '_method') as $key => $value) {
            // Skip file inputs — handled separately below
            if ($request->hasFile($key)) {
                continue;
            }
            Setting::set($key, $value);
        }

        // Handle file uploads (image-type settings)
        foreach ($request->allFiles() as $key => $file) {
            $path = $file->store('settings', 'public');
            $setting = Setting::where('key', $key)->first();
            $group = $setting ? $setting->group : 'general';
            Setting::set($key, $path, $group, 'image');
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
