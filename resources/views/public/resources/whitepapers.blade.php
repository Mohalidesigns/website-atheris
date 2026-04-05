<x-app-layout metaTitle="Whitepapers & Reports — Atheris GRC">
    <section class="bg-gradient-hero py-16"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl font-extrabold text-white mb-4">{{ App\Models\Setting::get('page_whitepapers_hero_title', 'Whitepapers & Reports') }}</h1><p class="text-white/70">{{ App\Models\Setting::get('page_whitepapers_hero_subtitle', 'In-depth research on GRC, Nigerian compliance, and risk management.') }}</p></div></section>
    <section class="py-20 bg-bg"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['BOFIA 2020 Compliance Guide', 'A comprehensive guide for Nigerian banks to achieve compliance with the Banks and Other Financial Institutions Act 2020.', 'whitepaper'],
                ['NDPA 2023 Implementation Checklist', 'Step-by-step checklist for financial institutions implementing Nigeria Data Protection Act requirements.', 'guide'],
                ['GRC Platform Buyer\'s Guide 2026', 'How to evaluate and select the right GRC platform for your African institution.', 'report'],
            ] as $r)
            <div class="bg-white rounded-2xl overflow-hidden border border-border hover:shadow-lg transition">
                <div class="aspect-[4/3] bg-gradient-to-br from-primary/5 to-accent/5 flex items-center justify-center"><div class="text-text-secondary/30 text-center"><svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg><span class="text-xs">Cover — 400 x 300px</span></div></div>
                <div class="p-6"><span class="inline-block bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded mb-3 uppercase">{{ $r[2] }}</span><h3 class="font-bold text-text-primary mb-2">{{ $r[0] }}</h3><p class="text-sm text-text-secondary mb-4">{{ $r[1] }}</p><a href="/demo" class="text-sm font-semibold text-primary hover:text-accent transition">Download &rarr;</a></div>
            </div>
            @endforeach
        </div>
    </div></section>
</x-app-layout>
