<x-app-layout :metaTitle="$solution->meta_title ?? 'Information Security Management Software for Nigerian Banks | Atheris'" :metaDescription="$solution->meta_description ?? $solution->description">
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
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Information Security Solution</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">See Every Threat.<br><span class="text-accent">Prove Every Control.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Security teams drown in alerts while auditors demand proof that controls actually work. Atheris Information Security unifies incident management, vulnerability remediation, security change review, and a tamper-evident evidence register — so your SOC runs on one platform and your next regulatory examination is a non-event.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if($solution->hero_image)
                            <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="Information Security Dashboard" class="rounded-xl w-full object-contain cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    <p class="text-sm font-medium">Security Operations Dashboard</p>
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
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Security Tools Generate Noise. Regulators Want Proof.</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Most institutions can detect threats but cannot demonstrate control effectiveness when it matters — during an examination, an audit, or an incident review.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($solution->challenges ?? [
                    ['title' => 'Alert Overload, No Context', 'desc' => 'Security tools generate endless noise. Without asset context and criticality, teams cannot prioritise what actually matters.'],
                    ['title' => 'Scattered Audit Evidence', 'desc' => 'Evidence lives in emails, SharePoint folders, and screenshots — impossible to verify, easy to lose, and expensive to reconstruct during examinations.'],
                    ['title' => 'Slow Incident Response', 'desc' => 'Manual coordination across chat, email, and tickets stretches response times and weakens regulatory breach reporting.'],
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
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Built for Security Operations & Assurance</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Detection, response, remediation, and evidence — connected to the same asset estate governed by Atheris IT Governance.</p>
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
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">From estate connectivity to examination-ready evidence.</p>
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
                        <img src="{{ asset('storage/' . $ss['dashboard']) }}" alt="Incident Management" class="rounded-xl w-full aspect-[4/3] object-contain bg-white border border-border cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    @else
                        <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                <p class="text-sm font-medium">Incident Management</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">Security incident pipeline with severity workflows and timelines</p>
                </div>
                <div class="bg-white rounded-2xl p-6 border border-border">
                    @if(!empty($ss['change']))
                        <img src="{{ asset('storage/' . $ss['change']) }}" alt="Change Register" class="rounded-xl w-full aspect-[4/3] object-contain bg-white border border-border cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    @else
                        <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                                <p class="text-sm font-medium">Change Register</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">Security change register with review, approval, and sign-off status</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Use Cases --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">Who Uses Atheris Information Security?</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'Banks & Financial Institutions', 'desc' => 'CBN cybersecurity supervision readiness with verifiable control evidence.'],
                    ['title' => 'SOC & Security Teams', 'desc' => 'Prioritised incident and vulnerability workflows with full asset context.'],
                    ['title' => 'CISOs', 'desc' => 'Board-level security KRIs, programme health, and risk trend reporting.'],
                    ['title' => 'Internal Audit & Compliance', 'desc' => 'Tamper-evident evidence for examinations, audits, and NDPA obligations.'],
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
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Make Your Next Examination a Non-Event</h2>
                <p class="text-lg text-white/70 mb-8">See how Atheris Information Security unifies detection, response, and evidence in one platform. Pairs natively with our <a href="/solutions/it-governance" class="text-accent underline underline-offset-4 hover:text-accent-light">IT Governance module</a>.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
