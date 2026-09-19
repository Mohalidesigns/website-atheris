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
                @php
                    $architectureImg = App\Models\Setting::get('page_platform_architecture_image')
                        ? asset('storage/' . App\Models\Setting::get('page_platform_architecture_image'))
                        : asset('images/platform-internal-audit.png');
                @endphp
                <img src="{{ $architectureImg }}" alt="Internal Audit Platform" class="w-full rounded-xl cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
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

    @php $faqs = [
        ['q' => "What is a GRC platform?", 'a' => "A GRC platform unifies governance, risk and compliance work — audit, risk, controls, compliance and ESG — in one system instead of separate spreadsheets and tools. Atheris provides an integrated GRC platform for African financial institutions, built around Nigerian regulatory requirements."],
        ['q' => "What does the Atheris GRC platform include?", 'a' => "The Atheris platform brings together internal audit, enterprise risk, internal control, compliance and ESG management. Because these modules share one system, evidence, controls and reporting are connected, giving institutions a single view of governance, risk and compliance."],
        ['q' => "Is Atheris an integrated GRC suite?", 'a' => "Yes. Rather than point tools, Atheris is an integrated GRC suite where audit, risk, control, compliance and ESG modules work together on shared data. This reduces duplicate effort and gives management and the board a connected view across GRC."],
        ['q' => "Where is Atheris data hosted?", 'a' => "Atheris hosts data in Nigeria, supporting NDPA 2023 data-residency expectations for financial institutions. Data hosting and security are covered on the platform's security page, which describes how institutional data is protected."],
        ['q' => "Can the platform integrate with core banking systems?", 'a' => "Atheris is designed to integrate with the systems institutions already run, including core banking platforms, so GRC data can connect to operational sources. Integration options are covered on the platform's integrations page."],
    ]; @endphp
    <x-faq :items="$faqs" title="GRC Platform — FAQs" />
</x-app-layout>
