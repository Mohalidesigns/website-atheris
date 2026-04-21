<x-app-layout :metaTitle="$solution->meta_title ?? 'ESG Management Software — Atheris GRC'" :metaDescription="$solution->meta_description ?? $solution->description">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">ESG Management</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Sustainability Meets<br><span class="text-accent">Accountability.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Global investors and regulators are demanding ESG transparency. Atheris helps Nigerian institutions track environmental, social, and governance metrics — turning compliance pressure into competitive advantage.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block" x-data="{ zoomed: false }">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        <img src="{{ asset('images/esg-dashboard.png') }}" alt="ESG Pro Dashboard - ESG Performance Overview" class="rounded-xl w-full h-auto cursor-zoom-in shadow-2xl" @click="zoomed = true" loading="eager">
                    </div>
                    {{-- Zoom overlay --}}
                    <template x-teleport="body">
                        <div x-show="zoomed" x-transition.opacity.duration.200ms @click="zoomed = false" @keydown.escape.window="zoomed = false" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 backdrop-blur-sm cursor-zoom-out p-4" style="display:none;">
                            <img src="{{ asset('images/esg-dashboard.png') }}" alt="ESG Pro Dashboard - ESG Performance Overview" class="max-w-[95vw] max-h-[95vh] rounded-xl shadow-2xl object-contain">
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Bar --}}
    <section class="py-12 bg-white border-b border-border">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach([
                    ['metric' => '80%', 'label' => 'Faster ESG report generation'],
                    ['metric' => '200+', 'label' => 'ESG metrics tracked'],
                    ['metric' => '100%', 'label' => 'NGX & SEC ESG coverage'],
                    ['metric' => '5x', 'label' => 'Improvement in data accuracy'],
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
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Why ESG is no longer optional for Nigerian institutions</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['title' => 'Investor Demands', 'desc' => 'International investors and DFIs now require ESG disclosures before committing capital. Without structured reporting, Nigerian institutions miss out on critical funding.'],
                    ['title' => 'NGX Sustainability Rules', 'desc' => 'The Nigerian Exchange Group mandates sustainability reporting for listed companies. Non-compliance risks delisting, fines, and reputational damage.'],
                    ['title' => 'Scattered ESG Data', 'desc' => 'Environmental metrics in facilities, social data in HR, governance data in compliance — ESG information is siloed across departments with no single source of truth.'],
                    ['title' => 'Global Framework Complexity', 'desc' => 'GRI, SASB, TCFD, UN SDGs — the alphabet soup of ESG frameworks overwhelms teams who lack dedicated sustainability departments.'],
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

    {{-- Three Pillars --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">The Three Pillars</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Complete E, S, and G coverage</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Environmental --}}
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-4">Environmental</h3>
                    <ul class="space-y-3">
                        @foreach(['Carbon emissions tracking (Scope 1, 2, 3)', 'Energy consumption monitoring', 'Waste management & recycling metrics', 'Water usage & conservation data', 'Climate risk assessment integration', 'TCFD-aligned reporting'] as $item)
                        <li class="flex items-start gap-2 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Social --}}
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <div class="w-14 h-14 bg-info/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-info" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-4">Social</h3>
                    <ul class="space-y-3">
                        @foreach(['Workforce diversity & inclusion metrics', 'Employee health & safety tracking', 'Community investment & CSR programs', 'Human rights due diligence', 'Financial inclusion impact measurement', 'Gender pay gap analysis'] as $item)
                        <li class="flex items-start gap-2 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-info shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Governance --}}
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-4">Governance</h3>
                    <ul class="space-y-3">
                        @foreach(['Board composition & independence tracking', 'Executive compensation transparency', 'Anti-corruption & ethics programs', 'Whistleblower management integration', 'Regulatory compliance scoring', 'Stakeholder engagement tracking'] as $item)
                        <li class="flex items-start gap-2 text-sm text-text-secondary">
                            <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Key Features --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Key Features</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Everything you need for ESG management</h2>
                <p class="text-lg text-text-secondary mt-4">Purpose-built for African institutions navigating the intersection of global ESG standards and local regulatory requirements.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Multi-Framework Reporting', 'desc' => 'Generate reports aligned with GRI, SASB, TCFD, UN SDGs, and NGX Sustainability Disclosure Guidelines — all from a single data set. Map once, report everywhere.', 'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['title' => 'AI-Powered Data Collection', 'desc' => 'Automatically aggregate ESG data from HR systems, facilities management, financial records, and operational databases. Eliminate manual data gathering that takes months.', 'icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'],
                    ['title' => 'ESG Risk Scoring', 'desc' => 'Quantify ESG risks and opportunities with scoring models calibrated for Nigerian and African market conditions — from climate risk in the Niger Delta to financial inclusion in underserved regions.', 'icon' => 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z'],
                    ['title' => 'Materiality Assessment', 'desc' => 'Identify and prioritise ESG topics that matter most to your stakeholders — investors, regulators, employees, and communities. Build your sustainability strategy on data, not assumptions.', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                    ['title' => 'Sustainability Dashboards', 'desc' => 'Real-time dashboards showing ESG performance trends, progress against targets, and peer benchmarking. Share interactive views with board members and investors.', 'icon' => 'M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z'],
                    ['title' => 'Audit Trail & Assurance', 'desc' => 'Complete audit trail for every ESG data point — from source to report. Facilitate external assurance engagements with structured evidence and automated data lineage.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ] as $feature)
                <div class="bg-white rounded-2xl p-8 border border-border hover:border-primary/20 hover:shadow-lg transition-all group">
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

    {{-- Why Atheris ESG Stands Out --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Why Atheris</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">ESG software built for Africa's reality</h2>
                <p class="text-lg text-text-secondary mt-4">Global ESG platforms assume Western infrastructure, mature data systems, and dedicated sustainability teams. We build for your reality.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                @foreach([
                    ['title' => 'NGX & SEC Sustainability Alignment', 'desc' => 'Pre-configured for Nigerian Exchange sustainability disclosure requirements and SEC Nigeria ESG guidelines. No need to manually map global frameworks to local regulations.', 'badge' => 'Regulation Ready'],
                    ['title' => 'African Context ESG Metrics', 'desc' => 'Track metrics that matter in Africa — financial inclusion rates, community development impact, local procurement spend, and infrastructure investment — alongside standard global ESG indicators.', 'badge' => 'Africa-Focused'],
                    ['title' => 'No Dedicated Sustainability Team Required', 'desc' => 'Designed for institutions where ESG is managed by the compliance or risk team, not a dedicated sustainability department. AI automates data collection and report drafting.', 'badge' => 'Accessible'],
                    ['title' => 'Integrated with Your GRC Programme', 'desc' => 'ESG governance metrics flow directly from your compliance and risk modules. Climate risks appear in your enterprise risk register. No parallel systems, no duplicate data entry.', 'badge' => 'Integrated'],
                ] as $item)
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full mb-4">{{ $item['badge'] }}</span>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Frameworks Supported --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-info/10 text-info text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Framework Support</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">One platform, every framework</h2>
                <p class="text-lg text-text-secondary mt-4">Map your ESG data once. Generate reports for any framework your investors or regulators require.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach([
                    ['name' => 'GRI Standards', 'desc' => 'Global Reporting Initiative'],
                    ['name' => 'SASB', 'desc' => 'Industry-specific standards'],
                    ['name' => 'TCFD', 'desc' => 'Climate-related disclosures'],
                    ['name' => 'UN SDGs', 'desc' => 'Sustainable Development Goals'],
                    ['name' => 'NGX Rules', 'desc' => 'Nigerian Exchange sustainability'],
                    ['name' => 'ISSB', 'desc' => 'IFRS Sustainability Standards'],
                ] as $framework)
                <div class="bg-white rounded-xl p-6 border border-border text-center">
                    <div class="text-lg font-bold text-primary mb-1">{{ $framework['name'] }}</div>
                    <div class="text-xs text-text-secondary">{{ $framework['desc'] }}</div>
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
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">From data chaos to investor-ready reports</h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8 relative">
                <div class="hidden md:block absolute top-16 left-[12%] right-[12%] h-0.5 bg-border"></div>
                @foreach([
                    ['step' => '1', 'title' => 'Configure', 'desc' => 'Select your reporting frameworks, define material topics, and set targets aligned with your sustainability strategy.'],
                    ['step' => '2', 'title' => 'Collect', 'desc' => 'AI aggregates ESG data from across your organisation — HR, operations, finance, facilities — automatically.'],
                    ['step' => '3', 'title' => 'Analyse', 'desc' => 'Track performance against targets, benchmark against peers, and identify risks and opportunities in real time.'],
                    ['step' => '4', 'title' => 'Report', 'desc' => 'Generate framework-aligned sustainability reports, investor presentations, and regulatory submissions with one click.'],
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

    {{-- Comparison --}}
    <section class="py-20 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Comparison</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Atheris ESG vs. Global ESG Platforms</h2>
            </div>
            <div class="bg-white rounded-2xl border border-border overflow-hidden">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-border bg-bg">
                            <th class="text-left p-4 font-semibold text-text-primary">Capability</th>
                            <th class="p-4 font-semibold text-accent text-center">Atheris</th>
                            <th class="p-4 font-semibold text-text-secondary text-center">Global ESG Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach([
                            ['feature' => 'NGX sustainability disclosure templates', 'atheris' => true, 'others' => false],
                            ['feature' => 'African-context ESG metrics', 'atheris' => true, 'others' => false],
                            ['feature' => 'GRI, SASB, TCFD, ISSB support', 'atheris' => true, 'others' => true],
                            ['feature' => 'AI-powered data aggregation', 'atheris' => true, 'others' => true],
                            ['feature' => 'Integrated with GRC platform', 'atheris' => true, 'others' => false],
                            ['feature' => 'Works without dedicated sustainability team', 'atheris' => true, 'others' => false],
                            ['feature' => 'Data hosted in Nigeria', 'atheris' => true, 'others' => false],
                            ['feature' => 'Priced for African institutions', 'atheris' => true, 'others' => false],
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
            <h2 class="text-3xl font-bold text-white mb-4">Start your ESG journey with confidence</h2>
            <p class="text-white/70 mb-8">Whether you're preparing your first sustainability report or maturing your ESG programme, Atheris gives you the tools to get it right — with African context built in.</p>
            <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
    </section>
</x-app-layout>
