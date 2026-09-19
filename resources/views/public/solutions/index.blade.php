<x-app-layout
    metaTitle="GRC Software Modules for Nigerian Financial Institutions | Atheris"
    metaDescription="Explore the Atheris GRC suite — internal audit, enterprise risk, internal control, compliance and ESG modules, built for CBN, BOFIA and NDPA and integrated on one platform.">

    {{-- Hero --}}
    <section class="bg-gradient-hero py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">The Atheris GRC Suite</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">GRC Software Modules for Nigerian Financial Institutions</h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto">One integrated platform for governance, risk and compliance — audit, risk, control, compliance and ESG, built for CBN, BOFIA and NDPA. Choose a module or run the full suite.</p>
        </div>
    </section>

    {{-- Module grid --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($solutions as $solution)
                <a href="/solutions/{{ $solution->slug }}" class="group flex flex-col bg-bg rounded-2xl p-8 border border-border hover:border-primary/20 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-primary/20 transition">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h2 class="text-lg font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $solution->title }}</h2>
                    <p class="text-sm text-text-secondary line-clamp-3 flex-1">{{ $solution->tagline ?: $solution->description }}</p>
                    <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary mt-5">Explore module
                        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </a>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <p class="text-text-secondary mb-6 max-w-2xl mx-auto">The modules share one system, so evidence, controls and reporting stay connected across governance, risk and compliance — with data hosted in Nigeria.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Request a Demo</a>
                    <a href="/platform" class="inline-flex items-center justify-center gap-2 border-2 border-border text-text-primary font-semibold px-8 py-4 rounded-xl hover:border-primary transition">See the Platform</a>
                </div>
            </div>
        </div>
    </section>

    @php $faqs = [
        ['q' => "What is a GRC suite?", 'a' => "A GRC suite is a set of integrated modules — internal audit, enterprise risk, internal control, compliance and ESG — that share one system. Atheris provides a GRC suite built for Nigerian financial institutions, so governance, risk and compliance work connects rather than living in separate tools."],
        ['q' => "Can I use one Atheris module or do I need the whole suite?", 'a' => "You can start with a single module — for example internal audit or compliance — and add others over time. Because Atheris is one integrated platform, adopting further modules later reuses the same data, controls and evidence rather than starting again."],
        ['q' => "Which GRC modules does Atheris offer?", 'a' => "Atheris offers five GRC modules: Internal Audit Management, Enterprise Risk Management, Internal Control Management, Compliance Management and ESG Management. Each is built for Nigerian regulation (CBN, BOFIA, NDPA) and works standalone or as part of the integrated suite."],
        ['q' => "Are the Atheris GRC modules built for Nigerian regulation?", 'a' => "Yes. Every module is designed around Nigerian regulatory requirements — CBN circulars, BOFIA 2020, NDPA 2023 and AML/CFT — rather than adapting a generic international platform, with data hosted in Nigeria for NDPA alignment."],
    ]; @endphp
    <x-faq :items="$faqs" title="GRC Suite — FAQs" />
</x-app-layout>
