<x-app-layout
    metaTitle="Thank You — Atheris"
    metaDescription="Your demo request has been received. Our team will be in touch shortly."
    :noindex="true">

    {{-- Fire the conversion only on a genuine submission (session flash set by
         LeadController), so direct visits / refreshes don't inflate counts. --}}
    @if(session('lead_submitted') === 'demo')
    @push('scripts')
    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: 'generate_lead', form_type: 'demo' });
    </script>
    @endpush
    @endif

    <section class="bg-gradient-hero py-24">
        <div class="max-w-2xl mx-auto px-4 text-center">
            <div class="w-20 h-20 bg-secondary/20 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg class="w-10 h-10 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Thank you — your demo request is in.</h1>
            <p class="text-lg text-white/70 mb-10">A member of our team will review your request and reach out within one business day to schedule a walkthrough tailored to your institution and role.</p>
            <a href="/" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Back to Home</a>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary text-center mb-10">What happens next</h2>
            <div class="grid md:grid-cols-3 gap-6 mb-16">
                @foreach([
                    ['1', 'We review your request', 'We look at your institution type and role so the demo is relevant, not generic.'],
                    ['2', 'We reach out', 'Expect an email within one business day to agree a time that works for your team.'],
                    ['3', 'Tailored walkthrough', 'A focused 30-minute session on the modules that matter to you, using real Nigerian banking scenarios.'],
                ] as $step)
                <div class="bg-bg rounded-2xl p-8 border border-border text-center">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-5 text-primary font-extrabold text-lg">{{ $step[0] }}</div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $step[1] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $step[2] }}</p>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <p class="text-text-secondary mb-6">While you wait, explore how Atheris works:</p>
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <a href="/platform" class="inline-flex items-center gap-2 border border-border rounded-lg px-5 py-2.5 text-sm font-semibold text-text-primary hover:border-primary transition">The Platform</a>
                    <a href="/solutions" class="inline-flex items-center gap-2 border border-border rounded-lg px-5 py-2.5 text-sm font-semibold text-text-primary hover:border-primary transition">GRC Modules</a>
                    <a href="/resources/cbn-hub" class="inline-flex items-center gap-2 border border-border rounded-lg px-5 py-2.5 text-sm font-semibold text-text-primary hover:border-primary transition">CBN Compliance Hub</a>
                    <a href="/resources/blog" class="inline-flex items-center gap-2 border border-border rounded-lg px-5 py-2.5 text-sm font-semibold text-text-primary hover:border-primary transition">Blog</a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
