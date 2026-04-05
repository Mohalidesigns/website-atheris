<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Mail\LeadConfirmation;
use App\Mail\NewLeadNotification;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        $lead = Lead::create($validated);

        try {
            Mail::to('info@atherislimited.com')->send(new NewLeadNotification($lead));
            Mail::to($lead->email)->send(new LeadConfirmation($lead));
        } catch (\Exception $e) {
            Log::error('Lead email failed: ' . $e->getMessage());
        }

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

        $lead = Lead::create([
            'first_name' => 'Newsletter',
            'last_name' => 'Subscriber',
            'email' => $validated['email'],
            'form_type' => 'newsletter',
            'source' => 'website',
        ]);

        try {
            Mail::to('info@atherislimited.com')->send(new NewLeadNotification($lead));
            Mail::to($lead->email)->send(new LeadConfirmation($lead));
        } catch (\Exception $e) {
            Log::error('Newsletter email failed: ' . $e->getMessage());
        }

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Subscribed successfully!']);
        }

        return back()->with('success', 'Subscribed successfully!');
    }
}
