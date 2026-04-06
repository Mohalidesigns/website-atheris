<x-app-layout metaTitle="Career Portal — Atheris Limited" metaDescription="Modern recruitment platform with branded career pages, applicant tracking, assessment workflows, and hiring analytics. Built for African organisations scaling their teams.">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/software-solutions" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Software Solutions
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Career Portal</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Attract the Best Talent.<br><span class="text-accent">Hire with Confidence.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Your career page is often the first interaction candidates have with your brand. Atheris Career Portal gives organisations a polished, branded recruitment platform that streamlines the entire hiring journey — from job posting to offer letter — while giving HR teams the tools to make faster, better hiring decisions.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        {{-- Placeholder 1: Career Portal Dashboard --}}
                        <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <p class="text-sm font-medium">Career Portal Dashboard</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- The Recruitment Challenge --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Recruitment in Africa is Broken</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Most organisations still manage hiring through email chains, shared spreadsheets, and WhatsApp groups. The result? Missed candidates, biased decisions, and months-long time-to-hire.</p>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                @foreach([
                    ['metric' => '67%', 'label' => 'of Nigerian companies lack a structured hiring process', 'color' => 'primary'],
                    ['metric' => '45 days', 'label' => 'average time-to-hire for mid-level roles in Lagos', 'color' => 'accent'],
                    ['metric' => '3 in 5', 'label' => 'candidates abandon applications due to poor experience', 'color' => 'danger'],
                    ['metric' => '₦2.5M', 'label' => 'average cost of a bad hire in Nigerian financial services', 'color' => 'secondary'],
                ] as $stat)
                <div class="bg-bg rounded-xl p-6 border border-border text-center">
                    <div class="text-2xl font-extrabold text-{{ $stat['color'] }} mb-2">{{ $stat['metric'] }}</div>
                    <p class="text-sm text-text-secondary">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Your Entire Hiring Pipeline, One Platform</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">From the moment a role is approved to the day a new hire starts, every step is tracked, measured, and optimised.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Branded Career Pages', 'desc' => 'A polished, mobile-responsive career page that matches your brand identity. Showcase your culture, values, benefits, and open positions. No developer required — edit everything from the admin panel.', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'],
                    ['title' => 'Job Management', 'desc' => 'Create and publish job listings with rich descriptions, requirements, salary ranges, and application deadlines. Categorise by department, location, and employment type. Set up approval workflows for new postings.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                    ['title' => 'Applicant Tracking (ATS)', 'desc' => 'Visual pipeline boards to track candidates through each stage: Applied, Screening, Interview, Assessment, Offer, Hired. Drag-and-drop interface with bulk actions and automated stage transitions.', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                    ['title' => 'Screening & Assessments', 'desc' => 'Custom screening questions to auto-filter unqualified applicants. Built-in assessment tools for aptitude tests, situational judgement, and role-specific evaluations. Score and rank candidates automatically.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['title' => 'Interview Scheduling', 'desc' => 'Integrated calendar for scheduling interviews with automatic email invitations and reminders. Panel interview coordination with interviewer availability checks. Video interview link generation.', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
                    ['title' => 'Collaborative Evaluation', 'desc' => 'Structured interview scorecards ensure consistent evaluation. Multiple interviewers rate candidates independently, reducing bias. Consolidated scores with side-by-side candidate comparison.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                    ['title' => 'Offer Management', 'desc' => 'Generate offer letters from templates with auto-populated candidate details. Track offer acceptance, negotiation, and rejection. Manage multiple offers with approval workflows.', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['title' => 'Talent Pool', 'desc' => 'Build a searchable database of past applicants and passive candidates. Tag candidates by skills, experience level, and availability. Re-engage strong candidates when new roles open.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                    ['title' => 'Hiring Analytics', 'desc' => 'Track time-to-hire, cost-per-hire, source effectiveness, pipeline conversion rates, and diversity metrics. Identify bottlenecks and optimise your recruitment process with data.', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                ] as $feature)
                <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition">
                    <div class="w-11 h-11 rounded-lg bg-accent/10 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Screenshots --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">Built for HR Teams That Move Fast</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Placeholder 2: Applicant Pipeline --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                        <div class="text-center">
                            <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <p class="text-sm font-medium">Applicant Pipeline View</p>
                            <p class="text-xs mt-1">1200 x 900px</p>
                        </div>
                    </div>
                    <p class="text-sm text-text-secondary mt-4 text-center">Kanban-style pipeline with drag-and-drop candidate management</p>
                </div>
                {{-- Placeholder 3: Branded Career Page --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                        <div class="text-center">
                            <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg>
                            <p class="text-sm font-medium">Branded Career Page</p>
                            <p class="text-xs mt-1">1200 x 900px</p>
                        </div>
                    </div>
                    <p class="text-sm text-text-secondary mt-4 text-center">Public-facing career page with your brand, culture, and open roles</p>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works --}}
    <section class="py-20 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-text-primary mb-4">How It Works</h2>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                @foreach([
                    ['step' => '01', 'title' => 'Post', 'desc' => 'Create a job listing, set requirements, and publish to your branded career page in minutes.'],
                    ['step' => '02', 'title' => 'Collect', 'desc' => 'Applications flow into your ATS automatically. Screening questions filter unqualified candidates.'],
                    ['step' => '03', 'title' => 'Evaluate', 'desc' => 'Schedule interviews, run assessments, and collect structured feedback from your hiring panel.'],
                    ['step' => '04', 'title' => 'Hire', 'desc' => 'Generate offer letters, track acceptance, and onboard your new team member seamlessly.'],
                ] as $step)
                <div class="text-center">
                    <div class="w-14 h-14 rounded-full bg-accent/10 flex items-center justify-center mx-auto mb-4">
                        <span class="text-lg font-bold text-accent">{{ $step['step'] }}</span>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-hero rounded-3xl p-12 lg:p-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Transform Your Hiring Process</h2>
                <p class="text-lg text-white/70 mb-8">See how Atheris Career Portal can help you attract, evaluate, and hire top talent faster.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
