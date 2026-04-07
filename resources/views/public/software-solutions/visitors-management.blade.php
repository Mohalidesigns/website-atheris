<x-app-layout metaTitle="Visitors Management System — Atheris Limited" metaDescription="Digital visitor registration, real-time tracking, badge printing, and security compliance. Built for corporate offices, banks, and government facilities in Nigeria.">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/software-solutions" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Software Solutions
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Visitors Management System</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Know Who's in Your Building.<br><span class="text-accent">At All Times.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Paper logbooks and manual sign-in sheets are a security liability. Atheris VMS replaces outdated visitor processes with a sleek digital platform that registers, tracks, and manages every person entering your facility — with real-time visibility for security teams and management.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if($product && $product->hero_image)
                            <img src="{{ asset('storage/' . $product->hero_image) }}" alt="VMS Dashboard" class="rounded-xl w-full aspect-[4/3] object-cover object-top">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    <p class="text-sm font-medium">VMS Dashboard</p>
                                    <p class="text-xs mt-1">1200 x 900px</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Problem Statement --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">The Problem with Paper Logbooks</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Most Nigerian organisations still rely on handwritten visitor logs. It is a compliance risk, a security gap, and a terrible first impression.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Security Blind Spots', 'desc' => 'Paper logs cannot be searched in real time. If an incident occurs, security teams spend hours flipping through pages to identify who was in the building.', 'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'],
                    ['title' => 'Compliance Failures', 'desc' => 'CBN, NDIC, and insurance regulators require verifiable visitor records. Illegible handwriting and missing entries create audit findings.', 'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Poor Visitor Experience', 'desc' => 'Long queues, repetitive form-filling, and manual badge creation frustrate important clients and partners before they even reach the meeting room.', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                ] as $item)
                <div class="bg-danger/5 rounded-2xl p-8 border border-danger/10">
                    <div class="w-12 h-12 rounded-xl bg-danger/10 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-2">{{ $item['title'] }}</h3>
                    <p class="text-text-secondary text-sm leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Built for Modern Facility Management</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">Every feature is designed to make visitor management effortless, secure, and auditable.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Digital Check-In Kiosk', 'desc' => 'Self-service tablet or kiosk for visitors to register with photo capture, ID scanning, and NDA acceptance. Eliminates front-desk bottlenecks.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['title' => 'Pre-Registration & Invites', 'desc' => 'Hosts pre-register expected visitors. Visitors receive an email or SMS with a QR code for express check-in on arrival.', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['title' => 'Badge Printing', 'desc' => 'Instant visitor badge generation with photo, host name, access zones, and expiry time. Customisable to match your brand identity.', 'icon' => 'M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15A2.25 2.25 0 002.25 6.75v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z'],
                    ['title' => 'Real-Time Dashboard', 'desc' => 'Live occupancy count, current visitors by floor or zone, overstay alerts, and emergency evacuation lists accessible from any device.', 'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zm12 0a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'],
                    ['title' => 'Host Notifications', 'desc' => 'Automatic SMS and email alerts to the host the moment their visitor checks in. No more phone calls to reception asking "has my guest arrived?"', 'icon' => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9'],
                    ['title' => 'Compliance Reporting', 'desc' => 'Exportable visitor logs with timestamps, photo evidence, and host details. Searchable records that satisfy regulatory and insurance requirements.', 'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['title' => 'Watchlist & Blacklist', 'desc' => 'Flag individuals of concern. The system automatically alerts security if a blacklisted visitor attempts to check in at any location.', 'icon' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636'],
                    ['title' => 'Multi-Location Support', 'desc' => 'Manage visitor flows across multiple branches, buildings, or campuses from a single centralised dashboard with location-specific reporting.', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                    ['title' => 'Contractor Management', 'desc' => 'Separate workflows for contractors with document verification, safety induction acknowledgment, and time-on-site tracking for billing purposes.', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z'],
                ] as $feature)
                <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition">
                    <div class="w-11 h-11 rounded-lg bg-primary/10 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Screenshot Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">See It in Action</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Screenshot 1 --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    @if($product && $product->screenshot_1)
                        <img src="{{ asset('storage/' . $product->screenshot_1) }}" alt="{{ $product->screenshot_1_caption ?? 'Visitor Check-in Screen' }}" class="rounded-xl w-full aspect-[4/3] object-cover object-top border border-border">
                    @else
                        <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <p class="text-sm font-medium">Visitor Check-in Screen</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">{{ $product->screenshot_1_caption ?? 'Self-service kiosk interface for visitor registration' }}</p>
                </div>
                {{-- Screenshot 2 --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    @if($product && $product->screenshot_2)
                        <img src="{{ asset('storage/' . $product->screenshot_2) }}" alt="{{ $product->screenshot_2_caption ?? 'Analytics Dashboard' }}" class="rounded-xl w-full aspect-[4/3] object-cover object-top border border-border">
                    @else
                        <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                            <div class="text-center">
                                <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                <p class="text-sm font-medium">Analytics Dashboard</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    @endif
                    <p class="text-sm text-text-secondary mt-4 text-center">{{ $product->screenshot_2_caption ?? 'Real-time visitor analytics and occupancy tracking' }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Use Cases --}}
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">Who Uses Atheris VMS?</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'Banks & Financial Institutions', 'desc' => 'Regulatory-compliant visitor records for CBN examination readiness.'],
                    ['title' => 'Corporate Head Offices', 'desc' => 'Professional visitor experience with branded check-in and badge printing.'],
                    ['title' => 'Government Agencies', 'desc' => 'Secure facility access control with watchlist integration and audit trails.'],
                    ['title' => 'Industrial & Manufacturing', 'desc' => 'Safety induction workflows and contractor time-tracking for compliance.'],
                ] as $useCase)
                <div class="bg-white rounded-xl p-6 border border-border text-center">
                    <h3 class="font-bold text-text-primary mb-2">{{ $useCase['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $useCase['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-hero rounded-3xl p-12 lg:p-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Upgrade Your Visitor Management</h2>
                <p class="text-lg text-white/70 mb-8">See how Atheris VMS can transform your facility security and visitor experience.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
