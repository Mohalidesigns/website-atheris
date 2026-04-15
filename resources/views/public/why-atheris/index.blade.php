<x-app-layout metaTitle="Why Atheris — Purpose-Built GRC for Africa & the Middle East" metaDescription="Decades of experience solving institutional governance, risk, and compliance challenges across Africa and the Middle East. Built local. Trusted globally.">

    {{-- Hero --}}
    <section class="bg-gradient-hero py-24 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-flex items-center gap-2 bg-accent/20 text-accent text-sm font-semibold px-5 py-2 rounded-full mb-8">Trusted by Institutions Across Africa & the Middle East</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-8 leading-tight">We Don't Just Build Software.<br><span class="text-accent">We Solve Institutional Problems.</span></h1>
                <p class="text-xl text-white/70 max-w-3xl mx-auto mb-10 leading-relaxed">For over two decades, we have worked alongside financial institutions, regulators, and boards across Africa and the Middle East &mdash; understanding the unique governance challenges that global vendors simply cannot address. Every feature in Atheris exists because a real institution needed it.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                        See It in Action
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#advantages" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">Our Advantages</a>
                </div>
            </div>
        </div>
    </section>

    {{-- The Atheris Difference --}}
    <section class="py-24 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-5 py-2 rounded-full mb-6">The Atheris Difference</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">Built Where the Problems Are</h2>
                <p class="text-text-secondary text-lg lg:text-xl leading-relaxed">Most GRC platforms are designed for Western regulatory frameworks and then retrofitted for emerging markets. Atheris was born in Africa, shaped by decades of hands-on experience with local regulators, and purpose-built for the institutions that operate here.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach([
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Speed of Execution', 'desc' => 'Go live in weeks, not months. Our platform ships pre-configured with the frameworks, templates, and workflows African institutions actually use &mdash; CBN guidelines, BOFIA 2020, NDPA 2023, AML/CFT requirements. No six-month consulting engagements to get started.', 'color' => 'accent'],
                    ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Non-Repudiation', 'desc' => 'Every action, approval, and change is digitally signed, timestamped, and permanently recorded. Audit findings cannot be altered without a traceable record. When regulators ask "who approved this and when?" &mdash; Atheris answers instantly.', 'color' => 'primary'],
                    ['icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4', 'title' => 'Data Residency & Retention', 'desc' => 'Your data stays where it belongs &mdash; in Nigeria, on infrastructure that complies with NDPA 2023. Full data retention policies that satisfy CBN examination requirements, with no dependency on foreign cloud jurisdictions.', 'color' => 'secondary'],
                    ['icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z', 'title' => 'Complete Risk Visibility', 'desc' => 'See every risk, finding, control, and obligation from a single unified portal. No switching between disconnected systems. From the Board Audit Committee down to the fieldwork auditor, everyone sees their view of the same truth.', 'color' => 'info'],
                    ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Naira Pricing', 'desc' => 'No foreign exchange risk. No USD invoicing that fluctuates with the parallel market. Atheris is priced in Nigerian Naira, making budgeting predictable and eliminating the hidden cost of currency volatility that plagues every foreign platform.', 'color' => 'accent'],
                    ['icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Operational Efficiency', 'desc' => 'Automate the manual work that drains your team: audit scheduling, control testing, finding generation, report compilation, and regulatory submissions. Our clients report 70% reduction in report writing time and 50% faster audit cycles.', 'color' => 'primary'],
                ] as $feature)
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-{{ $feature['color'] }}/30 hover:shadow-lg transition-all group">
                    <div class="w-14 h-14 bg-{{ $feature['color'] }}/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-{{ $feature['color'] }}/20 transition">
                        <svg class="w-7 h-7 text-{{ $feature['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-4">{{ $feature['title'] }}</h3>
                    <p class="text-text-secondary leading-relaxed">{!! $feature['desc'] !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Track Record Stats --}}
    <section class="py-16 lg:py-20 bg-gradient-hero">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 lg:gap-16 text-center">
                @foreach([
                    ['metric' => '20+', 'label' => 'Years solving institutional GRC challenges'],
                    ['metric' => '500+', 'label' => 'Financial institutions served'],
                    ['metric' => '15+', 'label' => 'Countries across Africa & the Middle East'],
                    ['metric' => '100%', 'label' => 'Naira-denominated pricing'],
                ] as $stat)
                <div class="py-2">
                    <div class="text-3xl md:text-5xl font-extrabold text-accent mb-3">{{ $stat['metric'] }}</div>
                    <div class="text-sm text-white/60 leading-snug">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Module Advantages --}}
    <section id="advantages" class="py-24 lg:py-28 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-5 py-2 rounded-full mb-6">Across Every Module</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">Every Module Solves a Real Problem</h2>
                <p class="text-text-secondary text-lg lg:text-xl leading-relaxed">We did not build features from a product roadmap. We built them from the audit findings, regulatory penalties, and board frustrations our clients brought to us over two decades. Every module reflects the way African institutions actually work.</p>
            </div>

            <div class="space-y-6">
                @foreach([
                    ['module' => 'Audit Management (ThirdLine)', 'problem' => 'Internal audit teams spend weeks compiling reports manually, with no traceability from finding to evidence.', 'solution' => 'End-to-end audit lifecycle from risk-based planning to AI-generated reports. 128+ pre-built data models. 70% reduction in report writing time. Full non-repudiation chain from finding to board report.', 'link' => '/solutions/audit-management'],
                    ['module' => 'Enterprise Risk Management', 'problem' => 'Risk registers live in spreadsheets, KRIs are tracked manually, and boards receive outdated risk snapshots.', 'solution' => 'Unified risk register with real-time KRI monitoring, RCSA workflows, and predictive risk scoring. Boards see live dashboards instead of stale quarterly reports.', 'link' => '/solutions/enterprise-risk-management'],
                    ['module' => 'Compliance Management', 'problem' => 'Tracking obligations across CBN, NDIC, SEC, NAICOM, and NDPA simultaneously is a full-time job — and things still slip.', 'solution' => 'Pre-loaded Nigerian regulatory frameworks with automated obligation tracking, deadline alerts, and compliance scoring by domain. One portal for every regulator.', 'link' => '/solutions/compliance-management'],
                    ['module' => 'Incident & Issue Management', 'problem' => 'Incidents are reported via email, tracked in spreadsheets, and root causes are rarely captured or followed up.', 'solution' => 'Structured incident capture with severity classification, root cause analysis, corrective action tracking, and automatic escalation for critical findings. 7-day board escalation for high-severity issues.', 'link' => '/solutions/incident-management'],
                    ['module' => 'Business Continuity', 'problem' => 'BCP documents gather dust in SharePoint. When disruptions occur, nobody knows where the plan is or whether it is current.', 'solution' => 'Living BCP with business impact analysis, recovery strategies, plan testing schedules, and activation workflows. CBN-compliant BCP reporting built in.', 'link' => '/solutions/business-continuity'],
                    ['module' => 'Third Party Risk', 'problem' => 'Vendor due diligence is a checkbox exercise performed once during onboarding, with no ongoing monitoring.', 'solution' => 'Continuous third-party risk assessment with automated due diligence workflows, contract tracking, SLA monitoring, and vendor risk scoring across your entire supply chain.', 'link' => '/platform/third-party-risk'],
                    ['module' => 'ESG Management', 'problem' => 'ESG reporting requirements are growing, but most institutions have no structured way to collect, measure, or report ESG data.', 'solution' => 'Structured ESG data collection across environmental, social, and governance dimensions. Automated reporting aligned to international frameworks with benchmarking capabilities.', 'link' => '/solutions/esg-management'],
                ] as $i => $item)
                <div class="bg-white rounded-2xl border border-border hover:shadow-lg transition-all overflow-hidden">
                    <div class="p-8 lg:p-10" x-data="{ open: false }">
                        <div class="flex items-start justify-between gap-6 cursor-pointer" @click="open = !open">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-primary/10 rounded-xl flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-text-primary">{{ $item['module'] }}</h3>
                                </div>
                                <p class="text-text-secondary leading-relaxed"><span class="font-semibold text-error/80">The problem:</span> {{ $item['problem'] }}</p>
                            </div>
                            <div class="shrink-0 mt-3">
                                <svg class="w-6 h-6 text-text-secondary/40 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                        <div x-show="open" x-collapse class="mt-6 pt-6 border-t border-border">
                            <p class="text-text-secondary leading-relaxed mb-6"><span class="font-semibold text-secondary">How Atheris solves it:</span> {{ $item['solution'] }}</p>
                            <a href="{{ $item['link'] }}" class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-accent transition">
                                Explore this module
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Customisation --}}
    <section class="py-24 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-block bg-accent/10 text-accent text-sm font-semibold px-5 py-2 rounded-full mb-6">Tailored to You</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6 leading-tight">Your Institution Is Unique.<br>Your GRC Platform Should Be Too.</h2>
                    <p class="text-text-secondary text-lg leading-relaxed mb-8">Every financial institution has its own organisational structure, risk appetite, reporting hierarchy, and regulatory profile. We do not force you into a rigid template. Atheris adapts to the way you work &mdash; not the other way around.</p>

                    <div class="space-y-5">
                        @foreach([
                            ['title' => 'Custom Workflows', 'desc' => 'Configure approval chains, escalation rules, and notification triggers to match your internal governance structure.'],
                            ['title' => 'Flexible Reporting', 'desc' => 'Build reports that match the exact format your Board, Audit Committee, and regulators expect &mdash; no reformatting needed.'],
                            ['title' => 'Role-Based Access', 'desc' => 'Granular permissions from Board members to field auditors, each seeing only what they need, in the context they need it.'],
                            ['title' => 'Local Support', 'desc' => 'Lagos-based implementation team that understands your regulatory landscape, speaks your language, and works in your timezone.'],
                        ] as $item)
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <span class="font-semibold text-text-primary">{{ $item['title'] }}:</span>
                                <span class="text-text-secondary"> {{ $item['desc'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="bg-gradient-to-br from-primary/5 to-accent/5 rounded-2xl p-10 border border-border">
                        <div class="space-y-6">
                            @foreach([
                                ['region' => 'Nigeria', 'institutions' => 'Commercial Banks, Microfinance Banks, Insurance, Capital Markets', 'frameworks' => 'CBN, BOFIA 2020, NDPA 2023, NAICOM, SEC'],
                                ['region' => 'West Africa', 'institutions' => 'Central Banks, Development Finance Institutions', 'frameworks' => 'ECOWAS Directives, National Banking Acts'],
                                ['region' => 'East & Southern Africa', 'institutions' => 'Banks, Pension Funds, Insurance Companies', 'frameworks' => 'Local Central Bank Regulations, IFRS'],
                                ['region' => 'Middle East', 'institutions' => 'Islamic Banks, Conventional Banks, Investment Firms', 'frameworks' => 'Central Bank Regulations, Sharia Compliance'],
                            ] as $region)
                            <div class="bg-white rounded-xl p-5 border border-border">
                                <h4 class="font-bold text-text-primary mb-2">{{ $region['region'] }}</h4>
                                <p class="text-xs text-text-secondary mb-1"><span class="font-semibold">Institutions:</span> {{ $region['institutions'] }}</p>
                                <p class="text-xs text-text-secondary"><span class="font-semibold">Frameworks:</span> {{ $region['frameworks'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial / Trust --}}
    <section class="py-24 lg:py-28 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-white rounded-3xl p-10 lg:p-16 border border-border shadow-sm">
                <svg class="w-12 h-12 text-accent/30 mx-auto mb-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-xl lg:text-2xl text-text-primary font-medium leading-relaxed mb-8">We evaluated three global GRC platforms before choosing Atheris. The difference was immediate &mdash; pre-loaded CBN frameworks, Naira pricing, and an implementation team that understood our exact regulatory obligations. We were live in six weeks. The others were quoting six months.</p>
                <div>
                    <div class="font-bold text-text-primary">Chief Audit Executive</div>
                    <div class="text-sm text-text-secondary">Tier-1 Nigerian Commercial Bank</div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 lg:py-28 bg-white border-t border-border">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">Ready to See the Difference?</h2>
            <p class="text-text-secondary text-lg lg:text-xl mb-10 leading-relaxed">Whether you are replacing a legacy GRC tool, consolidating fragmented processes, or implementing governance for the first time &mdash; Atheris gives you the platform, the expertise, and the local support to succeed.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/about" class="inline-flex items-center justify-center gap-2 border-2 border-primary/20 text-primary font-semibold px-8 py-4 rounded-xl hover:border-primary transition">About Atheris</a>
            </div>
        </div>
    </section>
</x-app-layout>
