<x-app-layout metaTitle="Third Party Risk Management — Atheris GRC" metaDescription="Manage vendor and third-party risks with AI-powered assessments, continuous monitoring, and Nigerian regulatory compliance. Built for African financial institutions.">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Third Party Risk Management</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Know Your Vendors.<br><span class="text-accent">Control Your Risk.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Nigerian financial institutions rely on hundreds of third-party vendors — from payment processors to cloud providers. Atheris gives you complete visibility into vendor risk with AI-powered assessments built for African regulatory requirements.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if(App\Models\Setting::get('page_tprm_dashboard_image'))
                            <img src="{{ asset('storage/' . App\Models\Setting::get('page_tprm_dashboard_image')) }}" alt="TPRM Dashboard" class="rounded-xl w-full object-contain cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg><p class="text-sm">TPRM Dashboard Screenshot</p><p class="text-xs mt-1">Upload via Admin &rarr; Pages &rarr; TPRM</p></div>
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
                @foreach([
                    ['metric' => '70%', 'label' => 'Faster vendor onboarding'],
                    ['metric' => '360°', 'label' => 'Vendor risk visibility'],
                    ['metric' => '100%', 'label' => 'CBN/NDPA compliance coverage'],
                    ['metric' => '24/7', 'label' => 'Continuous vendor monitoring'],
                ] as $stat)
                <div>
                    <div class="text-2xl md:text-3xl font-extrabold text-primary">{{ $stat['metric'] }}</div>
                    <div class="text-sm text-text-secondary mt-1">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- The Challenge --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-error/10 text-error text-sm font-semibold px-4 py-1.5 rounded-full mb-4">The Challenge</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Why Nigerian institutions struggle with third-party risk</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['title' => 'Spreadsheet Chaos', 'desc' => 'Vendor assessments trapped in Excel files and email threads. No centralised view of your third-party risk exposure across hundreds of vendors.'],
                    ['title' => 'Regulatory Pressure', 'desc' => 'CBN circulars, NDPA 2023, and SEC guidelines demand formal third-party risk programs — but most institutions lack the tools to comply.'],
                    ['title' => 'Local Vendor Complexity', 'desc' => 'Nigerian vendors often lack international certifications. You need risk assessments tailored to the local market, not global templates.'],
                    ['title' => 'Hidden Concentration Risk', 'desc' => 'Multiple departments onboarding the same vendors independently — creating invisible single points of failure across your institution.'],
                ] as $challenge)
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

    {{-- Key Features --}}
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Key Features</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Complete vendor lifecycle management</h2>
                <p class="text-lg text-text-secondary mt-4">From onboarding to offboarding, Atheris covers every stage of your vendor relationship — with automation purpose-built for African financial institutions.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'AI-Powered Risk Scoring', 'desc' => 'Automatically score vendors using 50+ risk indicators including financial health, cyber posture, regulatory standing, and local reputation data from Nigerian business registries.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                    ['title' => 'Vendor Due Diligence Portal', 'desc' => 'Self-service portal where vendors complete risk questionnaires, upload certifications, and provide evidence — reducing your assessment turnaround from weeks to days.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                    ['title' => 'Continuous Monitoring', 'desc' => 'Real-time monitoring of vendor risk signals including news alerts, CAC filing changes, financial distress indicators, and cybersecurity threat intelligence for Nigerian and African vendors.', 'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
                    ['title' => 'Contract & SLA Tracking', 'desc' => 'Centralised contract repository with automated renewal alerts, SLA compliance tracking, and performance scorecards tied to risk outcomes.', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['title' => 'Concentration Risk Analysis', 'desc' => 'Visualise vendor dependencies across business units, services, and geographies. Identify single points of failure before they become incidents.', 'icon' => 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z'],
                    ['title' => 'Regulatory Compliance Engine', 'desc' => 'Pre-built assessment templates aligned with CBN Outsourcing Guidelines, NDPA 2023 data processor requirements, SEC regulations, and NAICOM directives for insurance vendors.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ] as $feature)
                <div class="bg-bg rounded-2xl p-8 border border-border hover:border-primary/20 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition">
                        <svg class="w-6 h-6 text-primary group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Atheris TPRM Stands Out --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Why Atheris</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Built different from global TPRM tools</h2>
                <p class="text-lg text-text-secondary mt-4">Global vendors like Archer and Diligent treat third-party risk as a one-size-fits-all problem. We don't.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @foreach([
                    ['title' => 'Nigerian Regulatory Templates', 'desc' => 'Pre-configured questionnaires for CBN Outsourcing Guidelines, NDPA data processor assessments, and SEC vendor requirements. No need to build compliance templates from scratch.', 'badge' => 'Local First'],
                    ['title' => 'African Vendor Intelligence', 'desc' => 'Our AI pulls from local data sources — CAC filings, Nigerian news outlets, and African business registries — not just Dun & Bradstreet. Get risk signals that matter in your market.', 'badge' => 'AI-Powered'],
                    ['title' => 'Naira-Denominated Risk Quantification', 'desc' => 'Quantify vendor risk exposure in Naira with models calibrated for Nigerian market volatility, FX risk, and local economic conditions — not US-centric benchmarks.', 'badge' => 'Localised'],
                    ['title' => 'Integrated GRC Ecosystem', 'desc' => 'Vendor risks automatically flow into your enterprise risk register, trigger compliance tasks, and create audit findings. No standalone silos — everything connected in one platform.', 'badge' => 'Integrated'],
                ] as $item)
                <div class="bg-white rounded-2xl p-8 border border-border">
                    <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full mb-4">{{ $item['badge'] }}</span>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- How It Works --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">How It Works</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Vendor risk management in four steps</h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8 relative">
                <div class="hidden md:block absolute top-16 left-[12%] right-[12%] h-0.5 bg-border"></div>
                @foreach([
                    ['step' => '1', 'title' => 'Onboard', 'desc' => 'Register vendors, assign risk tiers, and send automated questionnaires through the self-service portal.'],
                    ['step' => '2', 'title' => 'Assess', 'desc' => 'AI scores vendor responses against 50+ risk indicators. Flag high-risk vendors for enhanced due diligence.'],
                    ['step' => '3', 'title' => 'Monitor', 'desc' => 'Continuous monitoring alerts you to changes in vendor risk posture — financial distress, cyber incidents, regulatory actions.'],
                    ['step' => '4', 'title' => 'Report', 'desc' => 'Generate board-ready reports on vendor risk exposure, concentration risk, and regulatory compliance status.'],
                ] as $step)
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg relative z-10">{{ $step['step'] }}</div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $step['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Comparison Section --}}
    <section class="py-20 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Comparison</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Atheris TPRM vs. The Rest</h2>
            </div>
            <div class="bg-white rounded-2xl border border-border overflow-hidden">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-border bg-bg">
                            <th class="text-left p-4 font-semibold text-text-primary">Capability</th>
                            <th class="p-4 font-semibold text-accent text-center">Atheris</th>
                            <th class="p-4 font-semibold text-text-secondary text-center">Global TPRM Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['feature' => 'Nigerian regulatory templates (CBN, NDPA, SEC)', 'atheris' => true, 'others' => false],
                            ['feature' => 'Local vendor intelligence (CAC, NCC, news)', 'atheris' => true, 'others' => false],
                            ['feature' => 'Naira-denominated risk quantification', 'atheris' => true, 'others' => false],
                            ['feature' => 'AI-powered risk scoring', 'atheris' => true, 'others' => true],
                            ['feature' => 'Vendor self-service portal', 'atheris' => true, 'others' => true],
                            ['feature' => 'Integrated with audit, compliance & risk modules', 'atheris' => true, 'others' => false],
                            ['feature' => 'Data hosted in Nigeria (AWS Lagos)', 'atheris' => true, 'others' => false],
                            ['feature' => 'Affordable for mid-tier institutions', 'atheris' => true, 'others' => false],
                        ] as $row)
                        <tr class="border-b border-border last:border-0">
                            <td class="p-4 text-text-primary">{{ $row['feature'] }}</td>
                            <td class="p-4 text-center">
                                @if($row['atheris'])
                                    <svg class="w-5 h-5 text-secondary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                @else
                                    <svg class="w-5 h-5 text-error/40 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                @endif
                            </td>
                            <td class="p-4 text-center">
                                @if($row['others'])
                                    <svg class="w-5 h-5 text-secondary mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                @else
                                    <svg class="w-5 h-5 text-error/40 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-gradient-hero">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Take control of your vendor risk</h2>
            <p class="text-white/70 mb-8">See how Atheris TPRM helps Nigerian institutions manage hundreds of vendors with confidence — book a personalised demo today.</p>
            <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
    </section>
</x-app-layout>
