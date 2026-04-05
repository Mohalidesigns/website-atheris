<x-app-layout metaTitle="CBN Compliance Hub — Atheris GRC">
    <section class="bg-gradient-hero py-16"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl font-extrabold text-white mb-4">{!! App\Models\Setting::get('page_cbn_hub_hero_title', 'CBN Compliance <span class="text-accent">Hub</span>') !!}</h1><p class="text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_cbn_hub_hero_subtitle', 'Your one-stop resource for Nigerian Central Bank regulatory compliance.') }}</p></div></section>
    <section class="py-20 bg-bg"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8">
            @foreach([
                ['CBN ORMS Framework Guide', 'Understanding the Operational Risk Management System requirements for Nigerian banks.'],
                ['BOFIA 2020 Summary', 'Key provisions of the Banks and Other Financial Institutions Act 2020 and compliance implications.'],
                ['NDPA 2023 for Banks', 'How the Nigeria Data Protection Act affects financial institution data handling practices.'],
                ['AML/CFT Compliance Guide', 'Anti-Money Laundering and Counter Financing of Terrorism obligations for Nigerian institutions.'],
            ] as $item)
            <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition flex gap-4">
                <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center shrink-0"><svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                <div><h3 class="font-bold text-text-primary mb-1">{{ $item[0] }}</h3><p class="text-sm text-text-secondary">{{ $item[1] }}</p><a href="/demo" class="text-sm font-semibold text-primary hover:text-accent transition mt-2 inline-block">Read More &rarr;</a></div>
            </div>
            @endforeach
        </div>
    </div></section>
</x-app-layout>
