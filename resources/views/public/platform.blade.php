<x-app-layout metaTitle="Platform Overview — Atheris GRC">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">The Atheris Platform</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">{!! App\Models\Setting::get('page_platform_hero_title', 'One Platform.<br><span class="text-accent">Complete GRC Coverage.</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-3xl mx-auto mb-10">{{ App\Models\Setting::get('page_platform_hero_subtitle', 'Six fully integrated modules covering every dimension of governance, risk, and compliance — all aligned to Nigerian regulatory requirements and powered by AI.') }}</p>
            <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">See It in Action <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
    </section>

    {{-- Platform Visual --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-bg rounded-2xl border border-border p-8 mb-16">
                @if(App\Models\Setting::get('page_platform_architecture_image'))
                    <img src="{{ asset('storage/' . App\Models\Setting::get('page_platform_architecture_image')) }}" alt="Platform Architecture" class="w-full rounded-xl">
                @else
                <div class="aspect-[16/7] bg-white rounded-xl border border-dashed border-gray-200 flex items-center justify-center text-text-secondary/30">
                    <div class="text-center"><svg class="w-20 h-20 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><p class="text-lg font-medium">Platform Architecture Diagram</p><p class="text-sm mt-1">Image Placeholder — 1400 x 700px</p></div>
                </div>
                @endif
            </div>

            {{-- Module Grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($solutions as $solution)
                <a href="/solutions/{{ $solution->slug }}" class="group bg-bg rounded-2xl p-8 border border-border hover:border-accent/30 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition">
                        <svg class="w-7 h-7 text-primary group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition">{{ $solution->title }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed mb-4">{{ $solution->description }}</p>
                    <span class="inline-flex items-center text-sm font-semibold text-primary group-hover:text-accent transition">Explore <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Additional Capabilities --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Extended Capabilities</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Go beyond traditional GRC</h2>
                <p class="text-lg text-text-secondary">Purpose-built modules for emerging risk domains that global platforms overlook in the African market.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <a href="/platform/third-party-risk" class="group bg-white rounded-2xl p-8 border border-border hover:border-accent/30 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-accent/20 transition">
                            <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-text-primary mb-2 group-hover:text-primary transition">Third Party Risk Management</h3>
                            <p class="text-text-secondary leading-relaxed mb-4">AI-powered vendor assessments, continuous monitoring, and Nigerian regulatory compliance. Know your vendors, control your risk.</p>
                            <span class="inline-flex items-center text-sm font-semibold text-accent">Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
                        </div>
                    </div>
                </a>
                <a href="/solutions/esg-management" class="group bg-white rounded-2xl p-8 border border-border hover:border-secondary/30 hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-secondary/20 transition">
                            <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-text-primary mb-2 group-hover:text-primary transition">ESG Management</h3>
                            <p class="text-text-secondary leading-relaxed mb-4">Track environmental, social, and governance metrics. Generate investor-ready sustainability reports aligned with NGX, GRI, and TCFD.</p>
                            <span class="inline-flex items-center text-sm font-semibold text-secondary">Learn more <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Integration --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-info/10 text-info text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Fully Integrated</span>
            <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">All modules talk to each other</h2>
            <p class="text-lg text-text-secondary max-w-2xl mx-auto mb-12">One risk finding in your register automatically creates an audit point, a compliance task, and a BCM trigger. No silos. No manual data transfer.</p>
            <div class="bg-white rounded-2xl border border-border p-8 max-w-4xl mx-auto">
                @if(App\Models\Setting::get('page_platform_integration_image'))
                    <img src="{{ asset('storage/' . App\Models\Setting::get('page_platform_integration_image')) }}" alt="Integration Flow" class="w-full rounded-xl">
                @else
                <div class="aspect-[16/9] border border-dashed border-gray-200 rounded-xl flex items-center justify-center text-text-secondary/30">
                    <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg><p class="text-sm font-medium">Integration Flow Diagram</p><p class="text-xs mt-1">Image Placeholder — 1200 x 675px</p></div>
                </div>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
