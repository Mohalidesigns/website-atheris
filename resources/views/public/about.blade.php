<x-app-layout metaTitle="About Atheris — Africa's GRC Platform">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Our Story</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6">{!! App\Models\Setting::get('page_about_hero_title', 'Built in Lagos.<br><span class="text-accent">Trusted Across Africa.</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-3xl mx-auto">{{ App\Models\Setting::get('page_about_hero_subtitle', "We're on a mission to build the most advanced GRC platform for African financial institutions — one that truly understands local regulations, local challenges, and local ambitions.") }}</p>
        </div>
    </section>

    {{-- Who We Are --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-6">Who We Are</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Technology that solves real problems</h2>
                    <p class="text-text-secondary leading-relaxed mb-5">Atheris Limited is a technology company that identifies the operational challenges African institutions face every day — and builds software to solve them. We believe that organisations across Africa deserve the same quality of enterprise tools available anywhere else in the world, but designed for how business actually works here.</p>
                    <p class="text-text-secondary leading-relaxed mb-5">Too many institutions still rely on spreadsheets, email chains, and manual processes for mission-critical functions like governance, risk management, compliance, and internal audit. These manual workflows are slow, error-prone, and impossible to scale. They create regulatory risk, waste productive hours, and leave leadership without the real-time visibility they need to make informed decisions.</p>
                    <p class="text-text-secondary leading-relaxed">Atheris exists to change that. We replace manual, fragmented processes with intelligent automation — purpose-built platforms that understand local regulations, local market dynamics, and the real-world constraints our clients operate within. Every product we build starts with a simple question: <span class="font-semibold text-text-primary">what problem are we solving, and how do we solve it better than anyone else?</span></p>
                </div>
                <div class="space-y-6">
                    @foreach([
                        ['icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'title' => 'We identify local problems', 'desc' => 'We start by deeply understanding the challenges Nigerian and African institutions face — regulatory complexity, infrastructure gaps, manual workflows, and compliance pressure that global vendors simply don\'t see.'],
                        ['icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'We build tailored solutions', 'desc' => 'Every product is engineered for the local market — from pre-loaded Nigerian regulatory templates to Naira-denominated models and data hosted on African soil.'],
                        ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'We automate what matters', 'desc' => 'We turn weeks of manual effort into minutes of automated workflow — AI-powered observations, one-click regulatory reports, and real-time dashboards that replace spreadsheets and email chains.'],
                        ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'We deliver measurable efficiency', 'desc' => 'Our clients see 60–80% reductions in reporting time, dramatic improvements in compliance coverage, and millions saved annually through process automation.'],
                    ] as $item)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-primary mb-1">{{ $item['title'] }}</h4>
                            <p class="text-sm text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Mission / Vision --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl p-10 border border-border">
                    <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-text-primary mb-4">Our Mission</h3>
                    <p class="text-text-secondary leading-relaxed">{{ App\Models\Setting::get('page_about_mission_text', 'To democratize enterprise-grade governance, risk, and compliance technology for African financial institutions — making world-class GRC accessible, affordable, and culturally aligned.') }}</p>
                </div>
                <div class="bg-white rounded-2xl p-10 border border-border">
                    <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-text-primary mb-4">Our Vision</h3>
                    <p class="text-text-secondary leading-relaxed">{{ App\Models\Setting::get('page_about_vision_text', 'To be the undisputed GRC platform of choice for every regulated financial institution in Africa — from the largest Tier-1 banks to the smallest microfinance institutions.') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- What Drives Us --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Our Approach</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Technology with purpose</h2>
                <p class="text-lg text-text-secondary">We don't build technology for technology's sake. Every line of code we write is in service of making African institutions more efficient, more compliant, and more competitive.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Local Problems, Local Solutions', 'desc' => 'We immerse ourselves in the regulatory and operational realities of Nigerian institutions. CBN circulars, NDPA requirements, BOFIA compliance — we build from the inside out, not the outside in.', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z'],
                    ['title' => 'Automation Over Manual Effort', 'desc' => 'If a process can be automated, it should be. We replace spreadsheets, email approvals, and paper-based workflows with intelligent systems that work faster and never miss a deadline.', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                    ['title' => 'AI That Understands Context', 'desc' => 'Our AI isn\'t a gimmick — it drafts audit observations, scores vendor risk, flags regulatory changes, and quantifies exposure. All calibrated for Nigerian market conditions and denominated in Naira.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                    ['title' => 'Enterprise Grade, African Price', 'desc' => 'World-class platform capabilities at pricing that makes sense for the African market. Naira-denominated, no FX risk, and deployment timelines measured in weeks not months.', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Data Sovereignty First', 'desc' => 'All data hosted on AWS Lagos. Zero cross-border transfer. Full NDPA 2023 compliance. Your data stays in Nigeria because that\'s where it belongs.', 'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
                    ['title' => 'Continuous Innovation', 'desc' => 'We ship new features every sprint — driven by direct feedback from Nigerian financial institutions. Our product roadmap is shaped by the people who use it, not analysts in another continent.', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
                ] as $item)
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <div class="w-12 h-12 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team (toggle-controlled) --}}
    @if(App\Models\Setting::get('page_about_show_team', '0') === '1')
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Our Team</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">The people behind Atheris</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($team as $member)
                <div class="bg-white rounded-2xl overflow-hidden border border-border hover:shadow-lg transition-shadow group">
                    <div class="aspect-[4/3] bg-gradient-to-br from-primary/5 to-info/5 relative flex items-center justify-center">
                        @if($member->photo)
                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="text-center text-text-secondary/30">
                                <div class="w-24 h-24 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-3xl font-bold text-primary/40">{{ substr($member->name, 0, 1) }}</span>
                                </div>
                                <p class="text-xs">Team Photo — 400 x 300px</p>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-text-primary">{{ $member->name }}</h3>
                        <p class="text-sm text-accent font-medium mb-3">{{ $member->title }}</p>
                        <p class="text-sm text-text-secondary leading-relaxed">{{ $member->bio }}</p>
                        @if($member->linkedin)
                        <a href="{{ $member->linkedin }}" target="_blank" class="inline-flex items-center gap-1 text-sm text-primary font-medium mt-3 hover:text-accent transition">LinkedIn <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg></a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- CTA --}}
    <section class="py-16 bg-gradient-hero">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to work with us?</h2>
            <p class="text-white/70 mb-8">See how Atheris can transform your institution's governance, risk, and compliance programme.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                <a href="/careers" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">Join Our Team</a>
            </div>
        </div>
    </section>
</x-app-layout>
