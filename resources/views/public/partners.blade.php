<x-app-layout metaTitle="Partners — Atheris GRC">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{!! App\Models\Setting::get('page_partners_hero_title', 'Partner <span class="text-accent">Program</span>') !!}</h1><p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_partners_hero_subtitle', "Join Africa's fastest-growing GRC ecosystem.") }}</p></div></section>
    <section class="py-20 bg-white"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            @foreach([['Consulting Partners', 'Help clients implement and optimize their GRC programs using Atheris.', 'briefcase'], ['Technology Partners', 'Integrate your solutions with the Atheris platform via our API.', 'code'], ['Reseller Partners', 'Sell Atheris to financial institutions in your market.', 'globe']] as $p)
            <div class="bg-bg rounded-2xl p-8 border border-border text-center">
                <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-6"><svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg></div>
                <h3 class="text-lg font-bold text-text-primary mb-3">{{ $p[0] }}</h3>
                <p class="text-sm text-text-secondary">{{ $p[1] }}</p>
            </div>
            @endforeach
        </div>
        <div class="text-center"><a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Become a Partner</a></div>
    </div></section>
</x-app-layout>
