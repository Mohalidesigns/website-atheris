<x-app-layout metaTitle="Software Solutions — Atheris Limited" metaDescription="Beyond GRC, Atheris builds tailored software solutions for African businesses. Explore our Visitors Management System, Poultry Management System, and Career Portal.">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Tailored Software Development</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">Software That Solves<br><span class="text-accent">Real African Problems</span></h1>
            <p class="text-lg md:text-xl text-white/70 max-w-3xl mx-auto mb-10 leading-relaxed">Beyond our flagship GRC platform, Atheris designs and builds purpose-driven software solutions for organisations across Africa. Each product is crafted to address specific operational challenges with intuitive design, robust security, and scalable architecture.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Talk to Our Team <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                <a href="#products" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">Explore Products</a>
            </div>
        </div>
    </section>

    {{-- Why Atheris for Software --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Why Build With Atheris?</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">We bring the same engineering discipline behind our enterprise GRC platform to every product we build.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Built for Africa', 'desc' => 'Every product is designed with the African business context in mind — from connectivity constraints to local regulatory requirements and Naira-denominated pricing.'],
                    ['icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z', 'title' => 'Enterprise-Grade Security', 'desc' => 'Role-based access control, full audit trails, encrypted data at rest and in transit, and hosting on AWS Lagos for data sovereignty compliance.'],
                    ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'title' => 'Continuous Evolution', 'desc' => 'Our products are not static. We ship updates continuously, driven by customer feedback and emerging industry requirements.'],
                ] as $item)
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-lg transition">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Product Cards --}}
    <section id="products" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Our Software Products</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Purpose-built applications that help organisations operate more efficiently, securely, and intelligently.</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                {{-- VMS --}}
                <a href="/software-solutions/visitors-management" class="group bg-white rounded-2xl overflow-hidden border border-border hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="aspect-[16/10] bg-gradient-to-br from-primary/5 to-info/10 flex items-center justify-center border-b border-border">
                        <div class="text-center text-text-secondary/30">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <p class="text-xs font-medium">Product Screenshot</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full mb-4">Facility Management</span>
                        <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition">Visitors Management System</h3>
                        <p class="text-text-secondary text-sm leading-relaxed mb-4">Digital visitor registration, real-time tracking, and security compliance for corporate offices, banks, and government facilities.</p>
                        <span class="inline-flex items-center gap-2 text-primary font-semibold text-sm">Learn More <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>

                {{-- Poultry --}}
                <a href="/software-solutions/poultry-management" class="group bg-white rounded-2xl overflow-hidden border border-border hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="aspect-[16/10] bg-gradient-to-br from-secondary/5 to-secondary/10 flex items-center justify-center border-b border-border">
                        <div class="text-center text-text-secondary/30">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            <p class="text-xs font-medium">Product Screenshot</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-secondary/10 text-secondary text-xs font-semibold px-3 py-1 rounded-full mb-4">Agriculture Tech</span>
                        <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition">Poultry Management System</h3>
                        <p class="text-text-secondary text-sm leading-relaxed mb-4">End-to-end poultry farm management covering flock tracking, feed management, health monitoring, and financial analytics.</p>
                        <span class="inline-flex items-center gap-2 text-primary font-semibold text-sm">Learn More <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>

                {{-- Career Portal --}}
                <a href="/software-solutions/career-portal" class="group bg-white rounded-2xl overflow-hidden border border-border hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="aspect-[16/10] bg-gradient-to-br from-accent/5 to-accent/10 flex items-center justify-center border-b border-border">
                        <div class="text-center text-text-secondary/30">
                            <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <p class="text-xs font-medium">Product Screenshot</p>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="inline-block bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full mb-4">HR Technology</span>
                        <h3 class="text-xl font-bold text-text-primary mb-3 group-hover:text-primary transition">Career Portal</h3>
                        <p class="text-text-secondary text-sm leading-relaxed mb-4">Modern recruitment platform with branded career pages, applicant tracking, assessment workflows, and analytics dashboards.</p>
                        <span class="inline-flex items-center gap-2 text-primary font-semibold text-sm">Learn More <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Custom Development CTA --}}
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-hero rounded-3xl p-12 lg:p-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Need a Custom Solution?</h2>
                <p class="text-lg text-white/70 mb-8 max-w-xl mx-auto">We build tailored software for organisations with unique operational requirements. From concept to deployment, our engineering team delivers solutions that scale.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Start a Conversation
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
