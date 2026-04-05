<x-app-layout metaTitle="Careers — Atheris Limited">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{!! App\Models\Setting::get('page_careers_hero_title', 'Join the <span class="text-accent">Atheris Team</span>') !!}</h1><p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_careers_hero_subtitle', "Help us build the future of GRC for Africa. We're always looking for talented people.") }}</p></div></section>
    <section class="py-20 bg-white"><div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-bg rounded-2xl p-12 border border-border">
            <svg class="w-16 h-16 mx-auto mb-6 text-primary/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <h2 class="text-2xl font-bold text-text-primary mb-4">Open Positions Coming Soon</h2>
            <p class="text-text-secondary mb-8">We're growing fast and will be posting open positions shortly. Send us your CV and we'll be in touch.</p>
            <a href="mailto:careers@atherislimited.com" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-light text-white font-semibold px-8 py-3 rounded-xl transition">Send Your CV</a>
        </div>
    </div></section>
</x-app-layout>
