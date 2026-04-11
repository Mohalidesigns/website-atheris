<x-app-layout>
    {{-- ===== HERO SECTION (Carousel) ===== --}}
    @php
        $heroSlides = json_decode(App\Models\Setting::get('hero_slides', '[]'), true) ?: [[
            'title' => 'Govern with Certainty. Built for Africa.',
            'subtitle' => "The only AI-first Governance, Risk & Compliance platform with native CBN, BOFIA 2020, and NDPA 2023 compliance — purpose-built for Nigerian financial institutions.",
            'badge' => "Africa's #1 AI-First GRC Platform",
            'cta_text' => 'Request a Free Demo', 'cta_url' => '/demo',
            'secondary_cta_text' => 'See the Platform', 'secondary_cta_url' => '/platform',
            'bg_image' => '',
        ]];
    @endphp
    <section class="relative min-h-[90vh] flex items-center overflow-hidden" x-data="heroCarousel()" data-slides="{{ count($heroSlides) }}">
        {{-- Animated Background --}}
        <div class="absolute inset-0 animate-gradient-shift" style="background: linear-gradient(135deg, #0F2341 0%, #1A365D 25%, #0F2341 50%, #2A4A7F 75%, #1A365D 100%); background-size: 400% 400%;"></div>
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-accent/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-info/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary-light/10 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1200px] h-[600px] bg-accent/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 w-full">
            @foreach($heroSlides as $i => $slide)
            <div x-show="currentSlide === {{ $i }}" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center" {!! $i > 0 ? 'x-cloak' : '' !!}>
                {{-- Text --}}
                <div class="text-center lg:text-left">
                    @if(!empty($slide['badge']))
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-8 border border-white/10">
                        <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                        {{ $slide['badge'] }}
                    </div>
                    @endif
                    <h1 class="text-4xl sm:text-5xl lg:text-5xl xl:text-6xl font-extrabold text-white leading-[1.1] mb-6">{!! nl2br(e($slide['title'])) !!}</h1>
                    <p class="text-lg lg:text-xl text-white/70 mb-10 max-w-xl mx-auto lg:mx-0 leading-relaxed">{{ $slide['subtitle'] }}</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        @if(!empty($slide['cta_text']))
                        <a href="{{ $slide['cta_url'] ?? '/demo' }}" class="group inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg shadow-accent/30 hover:shadow-xl hover:shadow-accent/40 hover:-translate-y-0.5 text-base">
                            {{ $slide['cta_text'] }}
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        @endif
                        @if(!empty($slide['secondary_cta_text']))
                        <a href="{{ $slide['secondary_cta_url'] ?? '/platform' }}" class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold px-8 py-4 rounded-xl transition-all border border-white/20 hover:border-white/40 text-base">{{ $slide['secondary_cta_text'] }}</a>
                        @endif
                    </div>
                </div>
                {{-- Image --}}
                <div class="hidden lg:block">
                    <div class="relative">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl border border-white/10 p-4 shadow-2xl">
                            @if(!empty($slide['bg_image']))
                                <img src="{{ asset('storage/' . $slide['bg_image']) }}" alt="{{ $slide['title'] }}" class="rounded-xl w-full h-full object-contain cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                            @else
                                <div class="bg-primary-dark/50 rounded-xl aspect-[4/3] flex items-center justify-center text-white/30 relative overflow-hidden">
                                    <div class="absolute inset-4 border border-white/10 rounded-lg">
                                        <div class="h-8 bg-white/5 border-b border-white/10 flex items-center px-3 gap-2"><div class="w-2.5 h-2.5 rounded-full bg-error/50"></div><div class="w-2.5 h-2.5 rounded-full bg-warning/50"></div><div class="w-2.5 h-2.5 rounded-full bg-secondary/50"></div></div>
                                        <div class="p-4 space-y-3"><div class="h-4 bg-white/5 rounded w-3/4"></div><div class="grid grid-cols-3 gap-3"><div class="h-20 bg-white/5 rounded-lg"></div><div class="h-20 bg-accent/10 rounded-lg"></div><div class="h-20 bg-secondary/10 rounded-lg"></div></div><div class="h-32 bg-white/5 rounded-lg"></div><div class="grid grid-cols-2 gap-3"><div class="h-16 bg-white/5 rounded-lg"></div><div class="h-16 bg-white/5 rounded-lg"></div></div></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-xl p-4 border border-border animate-float z-10"><div class="flex items-center gap-3"><div class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><div><div class="text-xs text-text-secondary">Compliance Score</div><div class="text-lg font-bold text-text-primary">98.5%</div></div></div></div>
                        <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-xl p-4 border border-border animate-float z-10" style="animation-delay: 1s"><div class="flex items-center gap-3"><div class="w-10 h-10 bg-accent/10 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg></div><div><div class="text-xs text-text-secondary">AI Risk Alert</div><div class="text-sm font-semibold text-text-primary">3 new insights</div></div></div></div>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Trust Badges + Navigation --}}
            <div class="mt-10">
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-2 text-sm text-white/50">
                    <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> NDPA 2023 Compliant</span>
                    <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Local Data Residency</span>
                    <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 500+ Institutions</span>
                </div>
                @if(count($heroSlides) > 1)
                <div class="flex items-center justify-center lg:justify-start gap-4 mt-6">
                    <button @click="prev()" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition backdrop-blur-sm border border-white/10"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></button>
                    <div class="flex gap-2">@foreach($heroSlides as $i => $slide)<button @click="goTo({{ $i }})" class="w-3 h-3 rounded-full transition-all" :class="currentSlide === {{ $i }} ? 'bg-accent w-8' : 'bg-white/30 hover:bg-white/50'"></button>@endforeach</div>
                    <button @click="next()" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition backdrop-blur-sm border border-white/10"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></button>
                </div>
                @endif
            </div>
        </div>
    </section>

    {{-- ===== SOCIAL PROOF / LOGO TICKER ===== --}}
    <section class="py-12 bg-white border-b border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-medium text-text-secondary mb-8 uppercase tracking-wider">{{ App\Models\Setting::get('homepage_trusted_by_text', 'Trusted by leading Nigerian financial institutions') }}</p>
            <div class="relative overflow-hidden">
                <div class="flex gap-12 animate-ticker">
                    @foreach($partners as $partner)
                        <div class="flex-shrink-0 flex items-center justify-center w-40 h-16 bg-gray-50 rounded-lg border border-gray-100 px-4">
                            @if($partner->logo)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-h-10 max-w-full object-contain">
                            @else
                                <span class="text-sm font-semibold text-text-secondary/70">{{ $partner->name }}</span>
                            @endif
                        </div>
                    @endforeach
                    {{-- Duplicate for seamless loop --}}
                    @foreach($partners as $partner)
                        <div class="flex-shrink-0 flex items-center justify-center w-40 h-16 bg-gray-50 rounded-lg border border-gray-100 px-4">
                            @if($partner->logo)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-h-10 max-w-full object-contain">
                            @else
                                <span class="text-sm font-semibold text-text-secondary/70">{{ $partner->name }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ===== PLATFORM OVERVIEW — 6 MODULES ===== --}}
    <section class="py-20 lg:py-28 bg-bg bg-mesh relative" x-data>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto mb-16" x-intersect="$el.classList.add('animate-slide-up')">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4 border border-primary/10">{{ App\Models\Setting::get('homepage_solutions_badge', 'Complete GRC Platform') }}</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-4">{{ App\Models\Setting::get('homepage_solutions_title', 'One Platform. Complete Governance.') }}</h2>
                <p class="text-lg text-text-secondary">{{ App\Models\Setting::get('homepage_solutions_subtitle', 'Six fully integrated modules covering every dimension of GRC — from audit planning to board reporting, all aligned to Nigerian regulatory requirements.') }}</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach($solutions as $solution)
                <a href="/solutions/{{ $solution->slug }}" class="group bg-white rounded-2xl p-8 border border-border hover:border-accent/30 card-hover" x-intersect="$el.classList.add('animate-scale-in')" style="animation-delay: {{ $loop->index * 100 }}ms">
                    <div class="w-14 h-14 rounded-xl bg-primary/5 group-hover:bg-accent/10 flex items-center justify-center mb-6 transition-colors">
                        @switch($solution->icon)
                            @case('clipboard-check')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                                @break
                            @case('shield')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                @break
                            @case('settings')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                @break
                            @case('check-circle')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                @break
                            @case('alert-triangle')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                @break
                            @case('refresh-cw')
                                <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                @break
                        @endswitch
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-colors">{{ $solution->title }}</h3>
                    <p class="text-text-secondary text-sm leading-relaxed mb-4">{{ $solution->description }}</p>
                    <span class="inline-flex items-center text-sm font-semibold text-primary group-hover:text-accent transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
                @endforeach

                {{-- Third Party Risk (standalone page, not in solutions table) --}}
                <a href="/platform/third-party-risk" class="group bg-white rounded-2xl p-8 border border-border hover:border-accent/30 card-hover" x-intersect="$el.classList.add('animate-scale-in')" style="animation-delay: {{ count($solutions) * 100 }}ms">
                    <div class="w-14 h-14 rounded-xl bg-primary/5 group-hover:bg-accent/10 flex items-center justify-center mb-6 transition-colors">
                        <svg class="w-7 h-7 text-primary group-hover:text-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition-colors">Third Party Risk Management</h3>
                    <p class="text-text-secondary text-sm leading-relaxed mb-4">Assess, monitor, and manage vendor and third-party risks across your supply chain with automated due diligence and continuous monitoring.</p>
                    <span class="inline-flex items-center text-sm font-semibold text-primary group-hover:text-accent transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    {{-- ===== AI DIFFERENTIATION ===== --}}
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div x-data x-intersect="$el.classList.add('animate-slide-in-left')">
                    <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-6">Powered by Atheris AI</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6 leading-tight">Intelligence that anticipates risk before it arrives</h2>
                    <p class="text-lg text-text-secondary mb-8 leading-relaxed">Not bolted-on AI. Our intelligence engine is the foundation — predicting control failures, auto-generating audit observations, and monitoring regulatory changes in real-time.</p>

                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-text-primary mb-1">Predictive Risk Scoring</h4>
                                <p class="text-sm text-text-secondary">AI models trained on Nigerian financial data predict where your next control failure will occur.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-text-primary mb-1">Auto-Generated Observations</h4>
                                <p class="text-sm text-text-secondary">AI drafts audit observations from field notes, maps to CBN control categories automatically.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-lg bg-info/10 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-5 h-5 text-info" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-text-primary mb-1">Regulatory Change Monitor</h4>
                                <p class="text-sm text-text-secondary">Real-time monitoring of CBN circulars, BOFIA updates, and NDPA amendments with impact analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- AI Visualization --}}
                <div class="relative" x-data x-intersect="$el.classList.add('animate-slide-in-right')">
                    <div class="bg-gradient-to-br from-primary/5 to-info/5 rounded-2xl p-8 border border-border">
                        @if(App\Models\Setting::get('homepage_ai_image'))
                            <img src="{{ asset('storage/' . App\Models\Setting::get('homepage_ai_image')) }}" alt="AI Intelligence Dashboard" class="rounded-xl w-full aspect-[4/3] object-contain shadow-lg cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                        <div class="bg-white rounded-xl shadow-lg aspect-[4/3] flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 p-6">
                                <div class="h-full border border-dashed border-gray-200 rounded-lg flex flex-col items-center justify-center text-text-secondary/40">
                                    <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                    <p class="text-sm font-medium">AI Intelligence Dashboard</p>
                                    <p class="text-xs mt-1">Image Placeholder — 800 x 600px</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== NIGERIA-FIRST CLAIM ===== --}}
    <section class="py-20 lg:py-28 bg-gradient-hero text-white overflow-hidden relative">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, rgba(255,255,255,0.15) 1px, transparent 1px); background-size: 30px 30px;"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div x-data x-intersect="$el.classList.add('animate-slide-up')">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        The only GRC platform
                        <span class="text-accent">built by Africans, for Africa.</span>
                    </h2>
                    <p class="text-lg text-white/70 mb-10 leading-relaxed">Every CBN guideline, BOFIA clause, and NDPA requirement is pre-loaded. No configuration needed. Your team doesn't need to map global frameworks to local rules — we've done it.</p>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                            <div class="w-12 h-12 bg-accent/20 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                            </div>
                            <h4 class="font-bold mb-2">CBN Ready</h4>
                            <p class="text-sm text-white/60">Pre-loaded regulatory frameworks updated automatically</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                            <div class="w-12 h-12 bg-secondary/20 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </div>
                            <h4 class="font-bold mb-2">NDPA Compliant</h4>
                            <p class="text-sm text-white/60">Data hosted in Nigeria with no cross-border transfer</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                            <div class="w-12 h-12 bg-info/20 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-info" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h4 class="font-bold mb-2">Naira Priced</h4>
                            <p class="text-sm text-white/60">Zero foreign exchange risk on your GRC investment</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/10">
                            <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h4 class="font-bold mb-2">8-Week Deploy</h4>
                            <p class="text-sm text-white/60">Not 8 months. Live in weeks, not quarters.</p>
                        </div>
                    </div>
                </div>

                {{-- Africa Coverage Map --}}
                <div class="hidden lg:flex items-center justify-center" x-data x-intersect="$el.classList.add('animate-slide-in-right')">
                    @if(App\Models\Setting::get('homepage_africa_map_image'))
                        <img src="{{ asset('storage/' . App\Models\Setting::get('homepage_africa_map_image')) }}" alt="Africa Coverage Map" class="w-full max-w-md aspect-square object-contain rounded-2xl cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    @else
                    <div class="w-full max-w-md aspect-square bg-white/5 rounded-2xl border border-white/10 flex items-center justify-center backdrop-blur-sm">
                        <div class="text-center text-white/30">
                            <svg class="w-24 h-24 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <p class="text-sm font-medium">Africa Coverage Map</p>
                            <p class="text-xs mt-1">Image Placeholder — 500 x 500px</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ===== STATISTICS ===== --}}
    <section class="py-16 lg:py-24 bg-white border-y border-border relative overflow-hidden">
        <div class="absolute inset-0 bg-dots opacity-30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 lg:gap-12">
                @php
                $stats = [
                    ['value' => '500', 'suffix' => '+', 'label' => 'Nigerian Institutions'],
                    ['value' => '6', 'suffix' => '', 'label' => 'Integrated Modules'],
                    ['value' => '99.9', 'suffix' => '%', 'label' => 'Platform Uptime'],
                    ['value' => '8', 'suffix' => '', 'label' => 'Week Avg Deploy'],
                    ['value' => '0', 'suffix' => '', 'label' => 'FX Risk', 'prefix' => '₦'],
                ];
                @endphp

                @foreach($stats as $stat)
                <div class="text-center" x-data="counter()" x-intersect.once="animate()" data-target="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}" data-prefix="{{ $stat['prefix'] ?? '' }}">
                    <div class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-primary mb-2" x-text="display">{{ ($stat['prefix'] ?? '') . $stat['value'] . $stat['suffix'] }}</div>
                    <div class="text-sm text-text-secondary font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== TESTIMONIALS ===== --}}
    <section class="py-20 lg:py-28 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Customer Stories</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Trusted by Africa's leading financial institutions</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm card-hover" x-data x-intersect="$el.classList.add('animate-scale-in')" style="animation-delay: {{ $loop->index * 150 }}ms">
                    <div class="flex items-center gap-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <blockquote class="text-text-primary mb-6 leading-relaxed">"{{ $testimonial->quote }}"</blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                            {{ substr($testimonial->author_name, 0, 1) }}
                        </div>
                        <div>
                            <div class="font-semibold text-sm text-text-primary">{{ $testimonial->author_name }}</div>
                            <div class="text-xs text-text-secondary">{{ $testimonial->author_title }}, {{ $testimonial->company }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===== LATEST BLOG POSTS ===== --}}
    @if($latestPosts->count() > 0)
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-4">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">From the Blog</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Latest insights & updates</h2>
                </div>
                <a href="/resources/blog" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-accent transition">
                    View All Posts <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                <a href="/resources/blog/{{ $post->slug }}" class="group bg-bg rounded-2xl overflow-hidden border border-border hover:shadow-lg transition-all hover:-translate-y-1">
                    <div class="aspect-[16/9] bg-gray-100 relative overflow-hidden">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-text-secondary/30 bg-gradient-to-br from-primary/5 to-info/5">
                                <div class="text-center">
                                    <svg class="w-10 h-10 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                                    <span class="text-xs">Featured Image — 800 x 450px</span>
                                </div>
                            </div>
                        @endif
                        @if($post->category)
                            <span class="absolute top-4 left-4 bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $post->category->name }}</span>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-text-primary mb-2 group-hover:text-primary transition line-clamp-2">{{ $post->title }}</h3>
                        <p class="text-sm text-text-secondary mb-4 line-clamp-2">{{ $post->excerpt }}</p>
                        <div class="flex items-center justify-between text-xs text-text-secondary">
                            <span>{{ $post->published_at?->format('M d, Y') }}</span>
                            <span>{{ $post->reading_time }} min read</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ===== NEWSLETTER SIGNUP ===== --}}
    <section class="py-20 bg-gradient-to-br from-primary/[0.03] to-accent/[0.03] border-t border-border relative overflow-hidden">
        <div class="absolute inset-0 bg-grid opacity-20"></div>
        <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-6 border border-primary/10">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Newsletter
            </div>
            <h3 class="text-2xl md:text-3xl font-bold text-text-primary mb-3">Stay updated on GRC in Africa</h3>
            <p class="text-text-secondary mb-8 max-w-lg mx-auto">Get weekly insights on Nigerian compliance, audit best practices, and platform updates.</p>
            <form action="/newsletter" method="POST" class="flex flex-col sm:flex-row gap-3 max-w-lg mx-auto">
                @csrf
                <input type="email" name="email" required placeholder="Enter your work email" class="flex-1 px-5 py-3.5 rounded-xl border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm shadow-sm">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-8 py-3.5 rounded-xl transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 shrink-0">Subscribe</button>
            </form>
            <p class="text-xs text-text-secondary/60 mt-4">Join 2,000+ GRC professionals. Unsubscribe anytime.</p>
        </div>
    </section>
</x-app-layout>
