<x-app-layout :metaTitle="$solution->meta_title ?? 'Enterprise Risk Management — Atheris GRC'" :metaDescription="$solution->meta_description ?? $solution->description">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                    </a>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">{{ $solution->tagline }}</h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">{{ $solution->description }}</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if($solution->hero_image)
                            <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="{{ $solution->title }}" class="rounded-xl w-full aspect-[4/3] object-cover">
                        @elseif($solution->screenshots && isset($solution->screenshots['dashboard']))
                            <img src="{{ asset('storage/' . $solution->screenshots['dashboard']) }}" alt="Enterprise Risk Command Centre" class="rounded-xl w-full aspect-[4/3] object-cover cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><p class="text-sm">ERM Dashboard Screenshot</p><p class="text-xs mt-1">1200 x 900px</p></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Bar --}}
    <section class="py-12 bg-white border-b border-border">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach($solution->roi_metrics ?? [] as $stat)
                <div>
                    <div class="text-2xl md:text-3xl font-extrabold text-primary">{{ $stat['metric'] }}</div>
                    <div class="text-sm text-text-secondary mt-1">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Challenges --}}
    @if($solution->challenges)
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-error/10 text-error text-sm font-semibold px-4 py-1.5 rounded-full mb-4">The Challenge</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Why Nigerian institutions need this</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($solution->challenges as $challenge)
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $challenge['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $challenge['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Command Centre Screenshot Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Command Centre</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Enterprise Risk Command Centre</h2>
                    <p class="text-text-secondary leading-relaxed mb-6">A single executive dashboard that gives your CRO, board risk committee, and management team a complete 360-degree view of organisational risk posture — updated in real time.</p>
                    <ul class="space-y-3">
                        @foreach(['Active risks, critical ratings, and KRI breaches at a glance', 'YTD net loss tracking in Naira with capital adequacy ratio', 'Residual risk heatmap with drill-down into individual cells', 'Risk rating distribution across your entire register', 'Open issues and overdue treatment plans with escalation alerts'] as $item)
                        <li class="flex items-start gap-3 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <div class="bg-bg rounded-2xl p-4 border border-border shadow-lg">
                        @if($solution->screenshots && isset($solution->screenshots['dashboard']))
                            <img src="{{ asset('storage/' . $solution->screenshots['dashboard']) }}" alt="Enterprise Risk Command Centre" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="aspect-[4/3] bg-white rounded-xl border border-dashed border-gray-200 flex items-center justify-center text-text-secondary/30">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><p class="text-sm font-medium">Command Centre Dashboard</p><p class="text-xs mt-1">Upload via Admin &rarr; Solutions &rarr; Edit</p></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Monte Carlo Simulation Screenshot Section --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-white rounded-2xl p-4 border border-border shadow-lg">
                        @if($solution->screenshots && isset($solution->screenshots['simulation']))
                            <img src="{{ asset('storage/' . $solution->screenshots['simulation']) }}" alt="Monte Carlo Simulation" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="aspect-[4/3] bg-bg rounded-xl border border-dashed border-gray-200 flex items-center justify-center text-text-secondary/30">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg><p class="text-sm font-medium">Monte Carlo Simulation</p><p class="text-xs mt-1">Upload via Admin &rarr; Solutions &rarr; Edit</p></div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Risk Quantification</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Monte Carlo Simulation Engine</h2>
                    <p class="text-text-secondary leading-relaxed mb-6">Quantify your risk exposure with institutional-grade Monte Carlo simulations — configured for Nigerian market conditions and denominated in Naira.</p>
                    <ul class="space-y-3">
                        @foreach(['Up to 100,000 iterations with configurable confidence levels (90%–99.9%)', 'Multiple risk scenarios: credit default, cyber attack, regulatory fines', 'Lognormal, normal, and custom probability distributions', 'Naira-denominated loss modelling with FX risk factoring', 'ICAAP integration for capital adequacy stress testing', 'Scenario library with pre-built Nigerian market risk profiles'] as $item)
                        <li class="flex items-start gap-3 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Risk Heatmap Screenshot Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Risk Analysis</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Interactive Risk Heatmap & Register</h2>
                    <p class="text-text-secondary leading-relaxed mb-6">Visualise your entire risk landscape on an interactive 5x5 matrix. Click any cell to drill down into individual risks, track movement trends, and identify emerging hotspots.</p>
                    <ul class="space-y-3">
                        @foreach(['Interactive 5x5 likelihood vs impact matrix with risk counts per cell', 'Toggle between inherent and residual risk views instantly', 'Filter by risk category, owner, business unit, or status', 'Risk movement trends showing how your risk posture evolves over time', 'Bow-tie analysis linking causes, risks, controls, and consequences', 'Risk summary cards showing critical, high, medium, and low counts'] as $item)
                        <li class="flex items-start gap-3 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <div class="bg-bg rounded-2xl p-4 border border-border shadow-lg">
                        @if($solution->screenshots && isset($solution->screenshots['heatmap']))
                            <img src="{{ asset('storage/' . $solution->screenshots['heatmap']) }}" alt="Risk Heatmap" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="aspect-[4/3] bg-white rounded-xl border border-dashed border-gray-200 flex items-center justify-center text-text-secondary/30">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg><p class="text-sm font-medium">Risk Heatmap</p><p class="text-xs mt-1">Upload via Admin &rarr; Solutions &rarr; Edit</p></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- All Features Grid --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Key Features</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Everything you need for enterprise risk management</h2>
                <p class="text-lg text-text-secondary mt-4">A complete ERM toolkit built for Nigerian financial institutions — from RCSA workshops to board-ready reporting.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($solution->features ?? [] as $feature)
                <div class="bg-white rounded-2xl p-6 border border-border hover:border-primary/20 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent/10 transition">
                        <svg class="w-6 h-6 text-primary group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="text-base font-bold text-text-primary mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Atheris ERM Stands Out --}}
    @if($solution->page_content && isset($solution->page_content['selling_points']))
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Why Atheris</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Built different from global ERM tools</h2>
                <p class="text-lg text-text-secondary mt-4">Global platforms like Archer and Diligent weren't designed for the Nigerian market. Atheris was.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($solution->page_content['selling_points'] as $point)
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $point['title'] }}</h3>
                    <p class="text-text-secondary leading-relaxed">{{ $point['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- How It Works --}}
    @if($solution->how_it_works)
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">How It Works</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Get started in three simple steps</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 relative">
                <div class="hidden md:block absolute top-16 left-1/6 right-1/6 h-0.5 bg-border"></div>
                @foreach($solution->how_it_works as $step)
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg relative z-10">{{ $step['step'] }}</div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $step['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Other Solutions --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Explore other modules</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($otherSolutions->take(3) as $other)
                <a href="/solutions/{{ $other->slug }}" class="group bg-bg rounded-xl p-6 border border-border hover:border-primary/20 hover:shadow-md transition-all">
                    <h3 class="font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $other->title }}</h3>
                    <p class="text-sm text-text-secondary line-clamp-2">{{ $other->description }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-gradient-hero">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">See Enterprise Risk Management in action</h2>
            <p class="text-white/70 mb-8">Book a personalised demo to see how Atheris transforms your risk management programme with AI-powered insights and Nigerian regulatory alignment.</p>
            <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
    </section>
</x-app-layout>
