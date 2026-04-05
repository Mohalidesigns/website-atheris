<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:30',
            'message' => 'nullable|string|max:2000',
            'form_type' => 'nullable|string|in:demo,contact,newsletter,download',
        ]);

        $validated['source'] = 'website';
        $validated['utm_params'] = $request->only(['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content']);
        $validated['form_type'] = $validated['form_type'] ?? 'demo';

        Lead::create($validated);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you! We will be in touch shortly.']);
        }

        return back()->with('success', 'Thank you! We will be in touch shortly.');
    }

    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Lead::create([
            'first_name' => 'Newsletter',
            'last_name' => 'Subscriber',
            'email' => $validated['email'],
            'form_type' => 'newsletter',
            'source' => 'website',
        ]);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Subscribed successfully!']);
        }

        return back()->with('success', 'Subscribed successfully!');
    }
}
