<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Mail\LeadConfirmation;
use App\Mail\NewLeadNotification;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    /** Each form type has a dedicated thank-you (conversion) page. */
    private array $thankYouRoutes = [
        'demo'    => 'demo.thankyou',
        'contact' => 'contact.thankyou',
        'partner' => 'partner.thankyou',
    ];

    public function store(Request $request)
    {
        // --- Spam defence (runs before validation) -------------------------
        // 1. Honeypot: a field hidden from humans. Any value => a bot.
        if ($request->filled('website')) {
            return $this->pretendSuccess($request);
        }

        // 2. Timing trap: the form was rendered with an encrypted timestamp.
        //    A submission under 3 seconds old (or with a missing/tampered
        //    timestamp) is treated as a bot.
        try {
            if (now()->timestamp - (int) decrypt($request->input('form_ts')) < 3) {
                return $this->pretendSuccess($request);
            }
        } catch (\Throwable $e) {
            return $this->pretendSuccess($request);
        }

        // 3. Cloudflare Turnstile — only enforced when configured. A real
        //    person who fails the challenge gets a visible error (not a
        //    silent drop) so they can retry.
        if ($error = $this->turnstileError($request)) {
            return back()->withInput()->withErrors(['captcha' => $error]);
        }
        // ------------------------------------------------------------------

        $validated = $request->validate([
            // not_regex rejects the bot naming pattern ("JoshuaEvimiGM"):
            // a lowercase letter followed by 2+ uppercase at the end.
            'first_name' => ['required', 'string', 'max:100', 'not_regex:/[a-z][A-Z]{2,}$/'],
            'last_name' => ['required', 'string', 'max:100', 'not_regex:/[a-z][A-Z]{2,}$/'],
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:100',
            'phone' => 'nullable|string|max:30',
            'message' => 'nullable|string|max:2000',
            'form_type' => 'nullable|string|in:demo,contact,newsletter,download,partner',
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

        $thankYouUrl = $this->thankYouUrl($validated['form_type']);

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you! We will be in touch shortly.', 'redirect' => $thankYouUrl]);
        }

        if ($thankYouUrl) {
            return redirect($thankYouUrl)->with('lead_submitted', $validated['form_type']);
        }

        return back()->with('success', 'Thank you! We will be in touch shortly.')->with('lead_form_type', $validated['form_type']);
    }

    /** Resolve a form type to its thank-you URL, or null. */
    private function thankYouUrl(?string $formType): ?string
    {
        $route = $this->thankYouRoutes[$formType] ?? null;

        return $route ? route($route) : null;
    }

    /**
     * Mimic a successful submission for rejected bots so they are not tipped
     * off — WITHOUT creating a lead and WITHOUT the `lead_submitted` flash, so
     * no Meta/LinkedIn conversion pixel fires on the thank-you page.
     */
    private function pretendSuccess(Request $request)
    {
        $url = $this->thankYouUrl($request->input('form_type', 'demo'));

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Thank you! We will be in touch shortly.', 'redirect' => $url]);
        }

        return $url ? redirect($url) : back()->with('success', 'Thank you! We will be in touch shortly.');
    }

    /**
     * Verify Cloudflare Turnstile. Returns an error message to show the user,
     * or null when the check passes or is not configured. Fails OPEN on a
     * network error so a Cloudflare outage never blocks legitimate leads.
     */
    private function turnstileError(Request $request): ?string
    {
        $secret = config('services.turnstile.secret');
        if (! $secret) {
            return null; // Turnstile disabled.
        }

        try {
            $response = Http::timeout(5)->asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret'   => $secret,
                'response' => $request->input('cf-turnstile-response'),
                'remoteip' => $request->ip(),
            ]);
            $passed = $response->successful() && $response->json('success') === true;
        } catch (\Throwable $e) {
            Log::warning('Turnstile verification unreachable, failing open: ' . $e->getMessage());

            return null; // Fail open.
        }

        return $passed ? null : 'Verification failed. Please tick the box and try again.';
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
