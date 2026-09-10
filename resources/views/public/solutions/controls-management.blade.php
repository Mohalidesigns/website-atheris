<x-app-layout :metaTitle="$solution->meta_title ?? 'Control Testing & Exception Management Software for Banks | SecondLine by Atheris'" :metaDescription="$solution->meta_description ?? 'Define, test, and rate internal controls, and track every exception to verified closure. Built for banks, microfinance banks, and fintechs in Nigeria and across Africa.'">

    @php
        $ss = $solution->screenshots ?? [];
        $dashboardImg = !empty($ss['dashboard']) ? asset('storage/' . $ss['dashboard'])
            : (file_exists(public_path('images/secondline/dashboard.png')) ? asset('images/secondline/dashboard.png') : null);
        $exceptionImg = !empty($ss['exceptions']) ? asset('storage/' . $ss['exceptions'])
            : (file_exists(public_path('images/secondline/exception-verification.png')) ? asset('images/secondline/exception-verification.png') : null);
    @endphp

    {{-- SECTION 1 — HERO --}}
    <section class="bg-gradient-hero py-20 lg:py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-8 hover:text-white transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                </a>
                <div class="flex justify-center items-center gap-3 mb-6">
                    <span class="w-12 h-12 md:w-14 md:h-14 bg-accent rounded-2xl flex items-center justify-center text-white font-extrabold text-xl md:text-2xl shadow-lg">SL</span>
                    <span class="text-white font-extrabold text-3xl md:text-4xl tracking-tight">SecondLine</span>
                </div>
                <p class="text-white/50 text-sm font-medium uppercase tracking-widest mb-6">Atheris Control Solution</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight max-w-4xl mx-auto">Every control tested.<br>Every exception closed.</h1>
                <p class="text-xl text-accent font-semibold mb-4">Nothing lost in a spreadsheet.</p>
                <p class="text-lg text-white/70 max-w-3xl mx-auto mb-10 leading-relaxed">SecondLine is the control testing and exception management platform for banks, mortgage banks, microfinance banks, and fintechs. Define your controls once, test them on a schedule, and chase every exception to verified closure.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                        Book a Demo
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#capabilities" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See How It Works</a>
                </div>
            </div>

            @if($dashboardImg)
            <div class="max-w-5xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 shadow-2xl">
                    <img src="{{ $dashboardImg }}" alt="SecondLine Control Dashboard" class="rounded-xl w-full shadow-lg cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                </div>
                <p class="text-center text-white/40 text-sm mt-4">SecondLine Dashboard — what's open, how serious, who owns it, how overdue. Click to expand.</p>
            </div>
            @endif
        </div>
    </section>

    {{-- SECTION 2 — THE PROBLEM --}}
    <section class="py-24 lg:py-28 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-error/10 text-error text-sm font-semibold px-5 py-2 rounded-full mb-6">The Problem</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">Control testing is happening. Proving it is the hard part.</h2>
                <p class="text-text-secondary text-lg lg:text-xl leading-relaxed">Most control functions already do the work. The problem is what happens around it.</p>
            </div>

            <div class="grid sm:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto mb-12">
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-error/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Results live on one laptop</h3>
                    <p class="text-text-secondary leading-relaxed">Test results sit in a workbook on one officer's laptop — invisible to everyone else who needs them.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-error/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">Exceptions vanish in email</h3>
                    <p class="text-text-secondary leading-relaxed">Exceptions get raised in an email thread and quietly forgotten. The owner says it's resolved, so it comes off the tracker — with no evidence, no verification, and no record of who decided.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-error/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">The examiner's question</h3>
                    <p class="text-text-secondary leading-relaxed">Then the examiner asks how many high-risk exceptions are still open and how old they are — and nobody can answer without three days of reconciliation.</p>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center gap-3 bg-secondary/10 text-secondary px-8 py-4 rounded-full font-semibold text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    SecondLine replaces that with one system of record
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 — CORE CAPABILITIES --}}
    <section id="capabilities" class="py-24 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-5 py-2 rounded-full mb-6">Core Capabilities</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">Everything the control function runs on</h2>
                <p class="text-text-secondary text-lg lg:text-xl leading-relaxed">From the control register to the board pack — one connected workflow, with an audit trail behind every step.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                {{-- Control Library --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Control Library</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Define once, version forever, approve before it goes live</p>
                    <p class="text-text-secondary leading-relaxed">Build a central register of every control in the institution — segregation of duties, access management, authorisation limits, reconciliations, dual control, cut-off procedures. Start from a pre-loaded library of standard banking controls or define your own. Every control carries an owner, a process, a unit, and a testing frequency. Every change is versioned, and no control goes live without maker–checker approval.</p>
                </div>

                {{-- Risk-to-Control Mapping --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Risk-to-Control Mapping</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">See what's covered, and what isn't</p>
                    <p class="text-text-secondary leading-relaxed">Map controls to the risks they mitigate, straight from your risk and control self-assessment. See inherent risk before controls, residual risk after, and — most usefully — the gaps: risks carrying no control at all, and controls mapped to nothing.</p>
                </div>

                {{-- Checklist-Driven Testing --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Checklist-Driven Testing</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Structure, not memory</p>
                    <p class="text-text-secondary leading-relaxed">Testers work a structured checklist, not their memory. Each check item is marked Pass, Fail, or Not Applicable, with a mandatory comment and evidence attached. Sampling basis is captured in full: population, sample size, method, items selected. Tests generate automatically on each control's frequency, so nothing falls off the calendar.</p>
                </div>

                {{-- Effectiveness Ratings --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Design & Operating Effectiveness Ratings</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Design and operating, rated separately</p>
                    <p class="text-text-secondary leading-relaxed">Rate every control on both dimensions that matter: is it designed well enough to work, and did it actually operate throughout the period? Ratings require documented rationale, go through control function approval, trend over time, and feed straight back into your residual risk position.</p>
                </div>

                {{-- Exception Tracker — the differentiator, full width --}}
                <div class="md:col-span-2 bg-primary rounded-2xl p-8 lg:p-12 border border-primary shadow-xl">
                    <div class="grid lg:grid-cols-2 gap-10 items-center">
                        <div>
                            <span class="inline-block bg-accent/20 text-accent text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wide mb-5">The rule that changes everything</span>
                            <h3 class="text-2xl lg:text-3xl font-bold text-white mb-3">An Exception Tracker That Can't Be Self-Closed</h3>
                            <p class="text-sm font-semibold text-accent uppercase tracking-wide mb-5">Owners remediate. Only control closes.</p>
                            <p class="text-white/70 leading-relaxed mb-4">Every failed check raises an exception automatically — no re-keying. Each one carries severity, owner, root cause, remediation plan, and a target date it's aged against. A control owner can mark an item remediated. <strong class="text-white">Only the control function can close it, and only after recording how the remediation was verified and by whom.</strong></p>
                            <p class="text-white/70 leading-relaxed">That single rule is what turns a tracker into an assurance record.</p>
                        </div>
                        <div>
                            @if($exceptionImg)
                            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 shadow-2xl">
                                <img src="{{ $exceptionImg }}" alt="SecondLine Exception Verification Screen" class="rounded-xl w-full cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                            </div>
                            <p class="text-center text-white/40 text-sm mt-3">Verified closure in action — click to expand</p>
                            @else
                            <div class="bg-white/5 rounded-2xl p-8 border border-white/10">
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-white text-sm font-bold">1</span>
                                        <span class="text-white/80 text-sm">Failed check raises the exception automatically</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center text-white text-sm font-bold">2</span>
                                        <span class="text-white/80 text-sm">Owner remediates and marks it remediated</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center text-white text-sm font-bold">3</span>
                                        <span class="text-white text-sm font-semibold">Control function verifies — then, and only then, it closes</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Compensating Controls --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Compensating Controls</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Know what's holding the line, and until when</p>
                    <p class="text-text-secondary leading-relaxed">When a control fails and remediation will take time, register the compensating control that's holding the line. Capture whether it's temporary or permanent, what exposure it doesn't cover, and when it expires. Temporary controls expire on schedule and re-escalate the underlying exception if the primary control still isn't fixed.</p>
                </div>

                {{-- Spot Checks --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Spot Checks</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Unscheduled reviews, formal reports, your format</p>
                    <p class="text-text-secondary leading-relaxed">Run an unscheduled review of a branch, a process, or a control whenever you need to — announced or surprise. Capture findings inline with severity, evidence, and management response, and issue a formal report in your own house format. Findings flow into the same exception tracker as everything else.</p>
                </div>

                {{-- Escalation --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Escalation That Creates Accountability</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Overdue items find their way upstairs</p>
                    <p class="text-text-secondary leading-relaxed">Set escalation rules by severity. When an exception goes unassigned, passes its due date, or sits without activity, it escalates automatically — control owner, then line manager, then control function head, then executive management. Every escalation is logged. Owners get a weekly digest of what's open on their desk.</p>
                </div>

                {{-- Reporting & Dashboard --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Reporting & Dashboard</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Open, serious, owned, overdue</p>
                    <p class="text-text-secondary leading-relaxed">A dashboard that answers the four questions you're actually asked: what's open, how serious, who owns it, and how overdue. Exceptions by severity, ageing buckets, testing completion rate, effectiveness distribution — every tile drilling through to the underlying records. Export to Excel or PDF, or generate a board committee pack in one click.</p>
                </div>

                {{-- Evidence & NDPA --}}
                <div class="bg-bg rounded-2xl p-8 lg:p-10 border border-border hover:border-accent/30 hover:shadow-lg transition-all">
                    <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-2">Evidence Handling Built for NDPA</h3>
                    <p class="text-xs font-semibold text-accent uppercase tracking-wide mb-4">Retention, legal hold, dual-approval disposal</p>
                    <p class="text-text-secondary leading-relaxed">Testing evidence often contains customer data. SecondLine treats that as a first-class problem. Uploaders declare whether an item holds personal data, retention periods run per evidence class, legal hold suspends disposal for anything under investigation, deletion requires dual approval, and every view and download is logged.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 4 — WORKS WITH THIRDLINE --}}
    <section class="py-24 lg:py-28 bg-gradient-hero">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-accent/20 text-accent text-sm font-semibold px-5 py-2 rounded-full mb-6">Works with ThirdLine</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">Define a control once. Let audit rely on it.</h2>
                <p class="text-white/70 text-lg leading-relaxed">SecondLine talks to <a href="/solutions/audit-management" class="text-accent font-semibold hover:underline">ThirdLine Internal Audit</a> over API. When your control officers define and approve a control, it flows straight into the audit universe — and test results, effectiveness ratings, and open exceptions flow with it. Controls can originate on either side, and you decide at setup which system is master.</p>
            </div>

            {{-- One register, two lines --}}
            <div class="flex flex-wrap justify-center items-center gap-4 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-6 border border-white/10 text-center min-w-[200px]">
                    <div class="text-accent font-extrabold text-lg mb-1">SecondLine</div>
                    <div class="text-white/60 text-sm">Second line of defence<br>Control testing & exceptions</div>
                </div>
                <div class="flex flex-col items-center text-white/50 text-xs font-semibold uppercase tracking-wide">
                    <svg class="w-8 h-8 text-accent mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                    One register<br>over API
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl px-8 py-6 border border-white/10 text-center min-w-[200px]">
                    <div class="text-accent font-extrabold text-lg mb-1">ThirdLine</div>
                    <div class="text-white/60 text-sm">Third line of defence<br>Internal audit</div>
                </div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                <p class="text-white/70 leading-relaxed mb-4">The result: internal audit places reliance on second-line testing already performed instead of repeating it, and the second and third lines stop arguing about whose control register is correct.</p>
                <p class="text-white/50 text-sm leading-relaxed">Where NexusRisk IRM is deployed, the risk register comes across too — so control effectiveness updates residual risk automatically.</p>
            </div>
        </div>
    </section>

    {{-- SECTION 5 — WHO IT'S FOR --}}
    <section class="py-24 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-5 py-2 rounded-full mb-6">Who It's For</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">One system, four audiences</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mb-12">
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">Internal Control & Compliance</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Run the testing calendar, verify closure, own the register.</p>
                </div>
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">Risk Management</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">See residual risk move as control effectiveness changes.</p>
                </div>
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">Internal Audit</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">Rely on second-line testing instead of duplicating it.</p>
                </div>
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">Executive Management & Board</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">One view of what's unresolved, how serious, and how old.</p>
                </div>
            </div>
            <p class="text-center text-text-secondary max-w-3xl mx-auto">Built for the Nigerian and wider African financial services market — commercial banks, mortgage banks, microfinance banks, payment service providers, and fintechs.</p>
        </div>
    </section>

    {{-- SECTION 6 — WHY ATHERIS --}}
    <section class="py-24 lg:py-28 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Why Atheris</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-6">Three lines of defence. One set of facts.</h2>
                    <p class="text-text-secondary text-lg mb-6 leading-relaxed">Atheris builds governance, risk, and compliance software for African financial institutions — ThirdLine for internal audit, NexusRisk IRM for enterprise risk, and SecondLine for control testing. The products share a data model and speak to each other, so the three lines of defence work from the same facts.</p>
                    <p class="text-text-secondary text-lg leading-relaxed">We build for the environment you actually operate in: CBN risk-based supervision, NDPA obligations on customer data, IIA standards, and the reality of a branch network. Deployment is available hosted or on-premises, with in-country data residency where you require it.</p>
                </div>
                <div class="space-y-4">
                    <div class="bg-white rounded-2xl p-6 border border-border flex items-center gap-5 hover:shadow-md transition">
                        <span class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center text-white font-extrabold flex-shrink-0">SL</span>
                        <div>
                            <div class="font-bold text-text-primary">SecondLine</div>
                            <div class="text-sm text-text-secondary">Control testing & exception management — the second line</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 border border-border flex items-center gap-5 hover:shadow-md transition">
                        <span class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-white font-extrabold flex-shrink-0">TL</span>
                        <div>
                            <div class="font-bold text-text-primary">ThirdLine</div>
                            <div class="text-sm text-text-secondary">Intelligent internal audit — the third line</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 border border-border flex items-center gap-5 hover:shadow-md transition">
                        <span class="w-12 h-12 bg-secondary rounded-xl flex items-center justify-center text-white font-extrabold flex-shrink-0">NR</span>
                        <div>
                            <div class="font-bold text-text-primary">NexusRisk IRM</div>
                            <div class="text-sm text-text-secondary">Enterprise risk management — the risk register of record</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Other Solutions --}}
    <section class="py-24 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl lg:text-3xl font-bold text-text-primary mb-12 text-center">Explore Other Modules</h2>
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

    {{-- SECTION 7 — FINAL CTA --}}
    <section class="py-24 lg:py-28 bg-bg border-t border-border">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="flex justify-center items-center gap-3 mb-8">
                <span class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center text-white font-extrabold">SL</span>
                <span class="text-text-primary font-extrabold text-2xl tracking-tight">SecondLine</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-text-primary mb-6">See it against your own control register.</h2>
            <p class="text-text-secondary text-lg lg:text-xl mb-10 leading-relaxed">Bring three of your controls to a demo and we'll set them up live — the library entry, the test checklist, the exception, the escalation path, and the report your board would see.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Book a Demo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 border-2 border-primary/20 text-primary font-semibold px-8 py-4 rounded-xl hover:border-primary transition">Request the Product Brief</a>
            </div>
        </div>
    </section>
</x-app-layout>
