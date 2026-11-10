<x-app-layout :metaTitle="$solution->meta_title ?? 'IT Governance Software for Nigerian Banks | Atheris'" :metaDescription="$solution->meta_description ?? $solution->description">
    @push('head') @include('partials.schema-software') @endpush
    @php $ss = $solution->screenshots ?? []; @endphp

    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/solutions" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> All Solutions
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">IT Governance Solution</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Govern IT Like a<br><span class="text-accent">Strategic Asset.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Boards and regulators no longer accept "IT is under control" on faith. Atheris IT Governance gives financial institutions a single platform to know every IT asset, govern every change, track every risk indicator, and prove compliance with the CBN Risk-Based Cybersecurity Supervision Framework and NDPA 2023 — with board-ready reporting built in.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if($solution->hero_image)
                            <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="IT Governance Dashboard" class="rounded-xl w-full object-contain cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    <p class="text-sm font-medium">IT Governance Dashboard</p>
                                    <p class="text-xs mt-1">1200 x 900px</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Problem Statement --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">IT Governance Cannot Run on Spreadsheets</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">When regulators ask "who owns this system, when was it last changed, and what risk does it carry?", scattered files simply do not answer.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($solution->challenges ?? [
                    ['title' => 'Spreadsheet Governance', 'desc' => 'Asset lists, change logs, and risk registers scattered across Excel files that contradict each other and that no one trusts during an examination.'],
                    ['title' => 'Regulatory Pressure', 'desc' => 'CBN risk-based supervision and NDPA 2023 demand verifiable evidence of IT governance. Manual compilation takes weeks and still leaves gaps.'],
                    ['title' => 'No Board Visibility', 'desc' => 'IT risk is reported anecdotally, leaving directors unable to meet their governance obligations or make informed technology investment decisions.'],
                ] as $item)
                <div class="bg-danger/5 rounded-2xl p-8 border border-danger/10">
                    <div class="w-12 h-12 rounded-xl bg-danger/10 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-2">{{ $item['title'] }}</h3>
                    <p class="text-text-secondary text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">One Platform for IT Governance</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Every module works from the same asset register, so governance data is consistent, current, and examination-ready.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($solution->features ?? [] as $feature)
                <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition">
                    <div class="w-11 h-11 rounded-lg bg-primary/10 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ROI / Stats --}}
    @if($solution->roi_metrics)
    <section class="py-20 bg-gradient-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                @foreach($solution->roi_metrics as $stat)
                <div>
                    <div class="text-4xl md:text-5xl font-extrabold text-accent mb-2">{{ $stat['metric'] }}</div>
                    <div class="text-white/70 text-sm">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- How It Works --}}
    @if($solution->how_it_works)
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">How It Works</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">From first asset import to board-ready reporting.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($solution->how_it_works as $item)
                <div class="relative bg-bg rounded-2xl p-8 border border-border">
                    <span class="text-5xl font-extrabold text-primary/15 absolute top-4 right-6">{{ str_pad($item['step'], 2, '0', STR_PAD_LEFT) }}</span>
                    <h3 class="font-bold text-text-primary mb-2 mt-4">{{ $item['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Screenshot Section --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">See It in Action</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-6 border border-border">
                    @if(!empty($ss['dashboard']))
                        <img src="{{ asset('storage/' . $ss['dashboard']) }}" alt="Asset Register" class="rounded-xl w-full aspect-[4/3] object-contain bg-white border border-border cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    @else
                        <div class="bg-bg rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"/></svg>
                                <p class="text-sm font-medium">Asset Register</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">Central IT asset register with ownership and criticality</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-border">
                    @if(!empty($ss['architecture']))
                        <img src="{{ asset('storage/' . $ss['architecture']) }}" alt="Governance Dashboard" class="rounded-xl w-full aspect-[4/3] object-contain bg-white border border-border cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    @else
                        <div class="bg-bg rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                <p class="text-sm font-medium">Governance Dashboard</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">KRI and change governance dashboard for board reporting</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Use Cases --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">Who Uses Atheris IT Governance?</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'Banks & Financial Institutions', 'desc' => 'CBN examination readiness with verifiable IT governance evidence.'],
                    ['title' => 'IT Leadership & CIOs', 'desc' => 'Full estate visibility, change discipline, and risk-based decision support.'],
                    ['title' => 'Risk & Compliance Teams', 'desc' => 'KRIs, CAPAs, and regulatory returns in one auditable workflow.'],
                    ['title' => 'Boards & Audit Committees', 'desc' => 'Clear, consistent board packs on IT risk and governance posture.'],
                ] as $useCase)
                <div class="bg-bg rounded-xl p-6 border border-border text-center">
                    <h3 class="font-bold text-text-primary mb-2">{{ $useCase['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $useCase['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Other Solutions --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Explore other modules</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($otherSolutions->take(3) as $other)
                <a href="/solutions/{{ $other->slug }}" class="group bg-white rounded-xl p-6 border border-border hover:border-primary/20 hover:shadow-md transition-all">
                    <h3 class="font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $other->title }}</h3>
                    <p class="text-sm text-text-secondary line-clamp-2">{{ $other->description }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-hero rounded-3xl p-12 lg:p-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Bring Order to IT Governance</h2>
                <p class="text-lg text-white/70 mb-8">See how Atheris IT Governance turns scattered spreadsheets into board-ready, examination-proof governance. Pairs natively with our <a href="/solutions/information-security" class="text-accent underline underline-offset-4 hover:text-accent-light">Information Security module</a>.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
