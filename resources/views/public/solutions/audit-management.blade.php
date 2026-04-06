<x-app-layout :metaTitle="$solution->meta_title ?? 'ThirdLine — Intelligent Internal Audit Solution | Atheris GRC'" :metaDescription="$solution->meta_description ?? $solution->description">

    @php $pc = $solution->page_content ?? []; $ss = $solution->screenshots ?? []; @endphp

    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Top Intro --}}
            <div class="text-center mb-16">
                <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-8 hover:text-white transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                </a>
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/thridLine-presentation.png') }}" alt="ThirdLine" class="h-12 md:h-14 object-contain">
                </div>
                <p class="text-white/50 text-sm font-medium uppercase tracking-widest mb-6">By Atheris Limited</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight max-w-4xl mx-auto">The Intelligent<br>Internal Audit Solution</h1>
                <p class="text-xl text-accent font-semibold mb-4">Efficiency. Visibility. Non-Repudiation.</p>
                <p class="text-lg text-white/70 max-w-3xl mx-auto mb-10 leading-relaxed">ThirdLine is a purpose-built internal audit management platform for financial institutions and regulated industries. It automates the entire audit lifecycle — from risk-based planning and fieldwork to AI-powered observations and CBN-ready reports — all from one unified portal.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                        Request a Demo
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#why-thirdline" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">Why ThirdLine?</a>
                </div>
            </div>

            {{-- Dashboard Preview --}}
            <div class="max-w-5xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 shadow-2xl">
                    <img src="{{ !empty($ss['dashboard']) ? asset('storage/' . $ss['dashboard']) : asset('images/Dashboard.png') }}" alt="ThirdLine Executive Dashboard" class="rounded-xl w-full shadow-lg cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                </div>
                <p class="text-center text-white/40 text-sm mt-4">ThirdLine Executive Dashboard — click to expand</p>
            </div>
        </div>
    </section>

    {{-- Stats Bar --}}
    <section class="py-8 bg-primary border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-accent mb-1">70%</div>
                    <div class="text-sm text-white/60">Report writing time reduction</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-accent mb-1">128+</div>
                    <div class="text-sm text-white/60">Data models powering audits</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-accent mb-1">10+</div>
                    <div class="text-sm text-white/60">Compliance frameworks</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-accent mb-1">100%</div>
                    <div class="text-sm text-white/60">Digital audit trail</div>
                </div>
            </div>
        </div>
    </section>

    {{-- The Challenge --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-error/10 text-error text-sm font-semibold px-4 py-1.5 rounded-full mb-4">The Challenge</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Traditional Internal Auditing Is Broken</h2>
                <p class="text-text-secondary text-lg leading-relaxed">Internal audit teams at financial institutions face mounting pressure — expanding regulatory requirements, manual processes, fragmented tools, and a constant demand for speed without sacrificing quality.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Spreadsheets Get Lost</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Paper-based audit programs lead to inconsistencies, version conflicts, and CBN examination failures.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Findings Lack Traceability</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Without a connected platform, audit observations cannot be traced from finding back to evidence, procedure, and report.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Reports Take Weeks</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Manual report compilation means boards are always waiting. Audit cycle times drag on, delaying critical risk decisions.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Boards Demand Answers</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Boards and regulators need real-time visibility into audit status, open findings, and remediation progress — yesterday.</p>
                </div>
            </div>

            {{-- Solution Transition --}}
            <div class="mt-16 text-center">
                <div class="inline-flex items-center gap-3 bg-secondary/10 text-secondary px-6 py-3 rounded-full font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    ThirdLine was built to solve this
                </div>
            </div>
        </div>
    </section>

    {{-- Why ThirdLine - 6 Selling Points --}}
    <section id="why-thirdline" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Why ThirdLine?</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Six Reasons Audit Teams Choose ThirdLine</h2>
                <p class="text-text-secondary text-lg">A purpose-built, end-to-end Internal Audit Solution that transforms how your audit team plans, executes, reports, and follows up.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($pc['selling_points'] ?? [] as $sp)
                <div class="bg-bg rounded-2xl p-8 border border-border hover:border-accent/30 hover:shadow-lg transition-all group">
                    <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent/20 transition">
                        <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $sp['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $sp['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Complete Audit Lifecycle --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Complete Lifecycle</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">One Platform. Full Audit Lifecycle.</h2>
                <p class="text-text-secondary text-lg">Every phase is connected, every handoff is tracked, and every approval is recorded — from annual planning through to follow-up validation.</p>
            </div>

            {{-- Lifecycle Flow --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                @foreach($pc['lifecycle_phases'] ?? [] as $phase)
                <div class="bg-white rounded-2xl p-6 border border-border shadow-sm">
                    <div class="w-10 h-10 bg-primary text-white rounded-xl flex items-center justify-center text-sm font-bold shadow-md mb-4">{{ $phase['step'] }}</div>
                    <h3 class="text-lg font-bold text-text-primary mb-2">{{ $phase['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $phase['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Work Programs & Fieldwork with Screenshot --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Work Programs & Fieldwork</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Structured Fieldwork, Accelerated Execution</h2>
                    <p class="text-text-secondary text-lg mb-6 leading-relaxed">ThirdLine ships with an extensive library of pre-built work program templates designed for real-world audit scenarios at financial institutions.</p>

                    <div class="space-y-4 mb-8">
                        @foreach($pc['work_programs'] ?? [] as $wp)
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-text-primary">{{ $wp['title'] }}:</span>
                                <span class="text-text-secondary text-sm"> {{ $wp['desc'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-bg rounded-xl p-4 border border-border">
                            <div class="text-sm font-semibold text-text-primary">5-Level Hierarchy</div>
                            <div class="text-xs text-text-secondary mt-1">Program &rarr; Area &rarr; Section &rarr; Procedure &rarr; Step</div>
                        </div>
                        <div class="bg-bg rounded-xl p-4 border border-border">
                            <div class="text-sm font-semibold text-text-primary">Built-in Sampling</div>
                            <div class="text-xs text-text-secondary mt-1">Population & sample size tracking at procedure level</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-bg rounded-2xl p-3 border border-border shadow-lg">
                        <img src="{{ !empty($ss['work_programs']) ? asset('storage/' . $ss['work_programs']) : asset('images/IT Audit & Risk Assurance Work Program.png') }}" alt="IT Audit & Risk Assurance Work Program" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Findings & Issues Management --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Findings Management</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Every Finding Documented, Rated, and Tracked</h2>
                <p class="text-text-secondary text-lg">Rigorous yet intuitive findings management using the internationally recognised 5 Cs format: Criteria, Condition, Cause, Consequence, and Corrective Action.</p>
            </div>

            {{-- 5 Cs Visual --}}
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <div class="bg-white rounded-xl px-6 py-4 border border-border shadow-sm text-center min-w-[140px]">
                    <div class="text-2xl font-extrabold text-primary mb-1">C1</div>
                    <div class="text-sm font-semibold text-text-primary">Criteria</div>
                </div>
                <div class="hidden sm:flex items-center text-border"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></div>
                <div class="bg-white rounded-xl px-6 py-4 border border-border shadow-sm text-center min-w-[140px]">
                    <div class="text-2xl font-extrabold text-primary mb-1">C2</div>
                    <div class="text-sm font-semibold text-text-primary">Condition</div>
                </div>
                <div class="hidden sm:flex items-center text-border"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></div>
                <div class="bg-white rounded-xl px-6 py-4 border border-border shadow-sm text-center min-w-[140px]">
                    <div class="text-2xl font-extrabold text-primary mb-1">C3</div>
                    <div class="text-sm font-semibold text-text-primary">Cause</div>
                </div>
                <div class="hidden sm:flex items-center text-border"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></div>
                <div class="bg-white rounded-xl px-6 py-4 border border-border shadow-sm text-center min-w-[140px]">
                    <div class="text-2xl font-extrabold text-primary mb-1">C4</div>
                    <div class="text-sm font-semibold text-text-primary">Consequence</div>
                </div>
                <div class="hidden sm:flex items-center text-border"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></div>
                <div class="bg-white rounded-xl px-6 py-4 border border-border shadow-sm text-center min-w-[140px]">
                    <div class="text-2xl font-extrabold text-primary mb-1">C5</div>
                    <div class="text-sm font-semibold text-text-primary">Corrective Action</div>
                </div>
            </div>

            {{-- Finding Types --}}
            <div class="bg-white rounded-2xl p-8 border border-border mb-12">
                <h3 class="text-lg font-bold text-text-primary mb-4">10+ Finding Types Supported</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($pc['finding_types'] ?? ['Control Deficiency', 'Compliance Gap', 'Fraud', 'SoD Violation', 'Process Weakness', 'Data Integrity Issue', 'Policy Non-compliance', 'IT Security Vulnerability', 'Financial Misstatement', 'Operational Inefficiency'] as $type)
                    <span class="inline-block bg-bg text-text-secondary text-xs font-medium px-3 py-1.5 rounded-full border border-border">{{ $type }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Traceability Chain --}}
            <div class="bg-primary/5 rounded-2xl p-8 border border-primary/10">
                <h3 class="text-lg font-bold text-text-primary mb-4">Unbroken Traceability Chain</h3>
                <div class="flex flex-wrap items-center gap-3 text-sm font-semibold">
                    <span class="bg-primary text-white px-4 py-2 rounded-lg">Finding</span>
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span class="bg-primary text-white px-4 py-2 rounded-lg">Audit Procedure</span>
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span class="bg-primary text-white px-4 py-2 rounded-lg">Work Program</span>
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span class="bg-primary text-white px-4 py-2 rounded-lg">Evidence</span>
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    <span class="bg-accent text-white px-4 py-2 rounded-lg">Audit Report</span>
                </div>
                <p class="text-sm text-text-secondary mt-4">Every link is clickable, auditable, and permanent. Critical findings trigger a mandatory 7-day escalation to the Board.</p>
            </div>
        </div>
    </section>

    {{-- AI-Powered Intelligence --}}
    <section class="py-20 bg-gradient-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-accent/20 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">AI-Powered Intelligence</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">AI That Works Alongside Your Auditors</h2>
                <p class="text-white/60 text-lg">Not a gimmick — a practical accelerator that saves hours on every engagement. Report writing time reduced by up to 70%, with auditors retaining full control.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($pc['ai_capabilities'] ?? [] as $ai)
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/15 transition">
                    <div class="w-10 h-10 bg-accent/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">{{ $ai['title'] }}</h3>
                    <p class="text-white/50 text-sm leading-relaxed">{{ $ai['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Risk Management with Screenshot --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-bg rounded-2xl p-3 border border-border shadow-lg">
                        <img src="{{ !empty($ss['risk']) ? asset('storage/' . $ss['risk']) : asset('images/Risk Register.png') }}" alt="Risk Register & Enterprise Visibility" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Risk Management</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">See Every Risk. From Every Angle. In One Place.</h2>
                    <p class="text-text-secondary text-lg mb-8 leading-relaxed">ThirdLine extends beyond internal audit into enterprise risk management. The integrated Risk Register, KRIs, and RCSA modules give your organisation a unified, real-time view of risk.</p>

                    <div class="space-y-6">
                        @foreach($pc['risk_features'] ?? [] as $rf)
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-primary">{{ $rf['title'] }}</h4>
                                <p class="text-sm text-text-secondary">{{ $rf['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Regulatory Compliance Frameworks --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Regulatory Compliance</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">10+ Pre-Built Compliance Frameworks — Ready on Day One</h2>
                    <p class="text-text-secondary text-lg mb-8 leading-relaxed">Purpose-built modules for the most critical regulatory and international standards. Pre-configured assessment templates, control libraries, clause-by-clause evaluation tools, and specialised reporting. No more building checklists from scratch.</p>

                    <div class="grid grid-cols-2 gap-3">
                        @foreach($pc['compliance_frameworks'] ?? [] as $fw)
                        <div class="bg-white rounded-xl p-3 border border-border flex items-center gap-3 hover:border-primary/20 transition">
                            <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-text-primary leading-tight">{{ $fw['name'] }}</div>
                                <div class="text-xs text-text-secondary">{{ $fw['category'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="bg-white rounded-2xl p-3 border border-border shadow-lg">
                        <img src="{{ !empty($ss['compliance']) ? asset('storage/' . $ss['compliance']) : asset('images/Regulatory Audit.png') }}" alt="Regulatory Compliance Audit Module" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Reporting & Board Governance --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Reporting & Governance</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Board-Ready Reports. Committee-Grade Governance.</h2>
                <p class="text-text-secondary text-lg">Multi-stage approval workflow ensures every report passes through rigorous quality gates before reaching the Audit Committee and Board.</p>
            </div>

            {{-- Report Approval Flow --}}
            <div class="bg-bg rounded-2xl p-8 border border-border mb-12">
                <h3 class="text-lg font-bold text-text-primary mb-6 text-center">Report Approval Workflow</h3>
                <div class="flex flex-wrap justify-center items-center gap-3">
                    @foreach($pc['report_workflow'] ?? [] as $i => $rw)
                    @if($i > 0)
                    <svg class="w-6 h-6 text-accent flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    @endif
                    <div class="{{ $loop->last ? 'bg-accent text-white' : 'bg-white border border-border text-text-primary' }} rounded-xl px-5 py-3 shadow-sm text-center">
                        <div class="text-sm font-bold {{ $loop->last ? '' : 'text-text-primary' }}">{{ $rw['title'] }}</div>
                        <div class="text-xs {{ $loop->last ? 'text-white/70' : 'text-text-secondary' }}">{{ $rw['desc'] }}</div>
                    </div>
                    @endforeach
                </div>
                <p class="text-xs text-text-secondary text-center mt-4">Full version tracking and return-for-rework capability at every stage</p>
            </div>

            {{-- Committee Portal Features --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pc['committee_features'] ?? [] as $cf)
                <div class="bg-bg rounded-xl p-6 border border-border hover:shadow-md transition">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $cf['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $cf['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Security & Roles --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Security & Administration</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Enterprise-Grade Security & Control</h2>
                <p class="text-text-secondary text-lg">Role-based access control with granular permissions, immutable audit logs, and digital signatures — the non-repudiation guarantee regulators demand.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                {{-- Role Hierarchy --}}
                <div class="bg-white rounded-2xl p-8 border border-border">
                    <h3 class="text-lg font-bold text-text-primary mb-6">Role Hierarchy</h3>
                    <div class="space-y-4">
                        @foreach($pc['role_hierarchy'] ?? [] as $role)
                        <div class="flex items-center gap-4">
                            <div class="w-3 h-3 bg-primary rounded-full flex-shrink-0"></div>
                            <div>
                                <span class="font-semibold text-text-primary text-sm">{{ $role['title'] }}</span>
                                <span class="text-text-secondary text-xs ml-2">{{ $role['desc'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Security Features --}}
                <div class="bg-white rounded-2xl p-8 border border-border">
                    <h3 class="text-lg font-bold text-text-primary mb-6">Security Features</h3>
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($pc['security_features'] ?? [] as $feature)
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span class="text-sm text-text-secondary">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- At a Glance --}}
    <section class="py-20 bg-gradient-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">ThirdLine at a Glance</h2>
                <p class="text-xl text-accent font-semibold">One platform. Complete audit lifecycle. Zero blind spots.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($pc['glance_stats'] ?? [] as $stat)
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 border border-white/10 text-center">
                    <div class="text-2xl md:text-3xl font-extrabold text-accent mb-1">{{ $stat['metric'] }}</div>
                    <div class="text-xs text-white/60 leading-tight">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Other Solutions --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Explore Other Modules</h2>
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
    <section class="py-20 bg-bg border-t border-border">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="mb-6">
                <img src="{{ asset('images/thridLine-presentation.png') }}" alt="ThirdLine" class="h-8 object-contain mx-auto">
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Ready to Transform Your Internal Audit Function?</h2>
            <p class="text-text-secondary text-lg mb-8">Whether you're navigating complex regulatory requirements or modernising audit operations, ThirdLine gives your team the tools, intelligence, and confidence to deliver world-class internal audit — faster, smarter, and with full accountability.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/about" class="inline-flex items-center justify-center gap-2 border-2 border-primary/20 text-primary font-semibold px-8 py-4 rounded-xl hover:border-primary transition">Learn More</a>
            </div>
        </div>
    </section>
</x-app-layout>
