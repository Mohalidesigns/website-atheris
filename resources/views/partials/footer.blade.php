<footer class="bg-gradient-dark text-white">
    {{-- CTA Banner --}}
    <div class="border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to transform your GRC program?</h2>
            <p class="text-lg text-white/70 mb-8 max-w-2xl mx-auto">Join 500+ Nigerian financial institutions that trust Atheris for their governance, risk, and compliance needs.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-semibold px-8 py-3.5 rounded-lg transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 text-base">
                    Request a Demo
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="/about" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 hover:border-white text-white font-semibold px-8 py-3.5 rounded-lg transition-all text-base">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    {{-- Main Footer --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            {{-- Brand Column --}}
            <div class="col-span-2 md:col-span-3 lg:col-span-2">
                <a href="/" class="flex items-center gap-3 mb-6">
                    @if(App\Models\Setting::get('site_logo_light') || App\Models\Setting::get('site_logo'))
                        <img src="{{ asset('storage/' . (App\Models\Setting::get('site_logo_light') ?: App\Models\Setting::get('site_logo'))) }}" alt="{{ App\Models\Setting::get('site_name', 'Atheris') }}" class="h-10">
                    @else
                        <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <span class="text-xl font-bold">Atheris</span>
                            <span class="block text-[10px] text-white/50 uppercase tracking-widest">GRC Platform</span>
                        </div>
                    @endif
                </a>
                <p class="text-sm text-white/60 mb-6 max-w-xs">Africa's only AI-first GRC platform with native Nigerian regulatory compliance. Built in Lagos, trusted across Africa.</p>
                <div class="flex gap-4">
                    <a href="{{ App\Models\Setting::get('linkedin', '#') }}" target="_blank" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-accent transition" aria-label="LinkedIn">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="{{ App\Models\Setting::get('twitter', '#') }}" target="_blank" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-accent transition" aria-label="Twitter">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="{{ App\Models\Setting::get('facebook', '#') }}" target="_blank" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-accent transition" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="{{ App\Models\Setting::get('instagram', '#') }}" target="_blank" class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center hover:bg-accent transition" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Platform --}}
            <div>
                <h4 class="font-semibold text-sm mb-4 text-white/90">Platform</h4>
                <ul class="space-y-3">
                    <li><a href="/platform" class="text-sm text-white/60 hover:text-accent transition">Overview</a></li>
                    <li><a href="/platform/ai-intelligence" class="text-sm text-white/60 hover:text-accent transition">AI Intelligence</a></li>
                    <li><a href="/platform/security" class="text-sm text-white/60 hover:text-accent transition">Security & Trust</a></li>
                    <li><a href="/platform/integrations" class="text-sm text-white/60 hover:text-accent transition">Integrations</a></li>
                </ul>
            </div>

            {{-- Solutions --}}
            <div>
                <h4 class="font-semibold text-sm mb-4 text-white/90">Solutions</h4>
                <ul class="space-y-3">
                    <li><a href="/solutions/audit-management" class="text-sm text-white/60 hover:text-accent transition">Audit Management</a></li>
                    <li><a href="/solutions/enterprise-risk-management" class="text-sm text-white/60 hover:text-accent transition">Risk Management</a></li>
                    <li><a href="/solutions/controls-management" class="text-sm text-white/60 hover:text-accent transition">Controls</a></li>
                    <li><a href="/solutions/compliance-management" class="text-sm text-white/60 hover:text-accent transition">Compliance</a></li>
                    <li><a href="/solutions/incident-management" class="text-sm text-white/60 hover:text-accent transition">Incident Mgmt</a></li>
                    <li><a href="/solutions/business-continuity" class="text-sm text-white/60 hover:text-accent transition">Business Continuity</a></li>
                    <li><a href="/solutions/esg-management" class="text-sm text-white/60 hover:text-accent transition">ESG Management</a></li>
                    <li><a href="/platform/third-party-risk" class="text-sm text-white/60 hover:text-accent transition">Third Party Risk</a></li>
                </ul>
            </div>

            {{-- Products --}}
            @if(App\Models\Setting::get('products_page_enabled'))
            <div>
                <h4 class="font-semibold text-sm mb-4 text-white/90">Products</h4>
                <ul class="space-y-3">
                    <li><a href="/software-solutions/visitors-management" class="text-sm text-white/60 hover:text-accent transition">Visitors Management</a></li>
                    <li><a href="/software-solutions/poultry-management" class="text-sm text-white/60 hover:text-accent transition">Poultry Management</a></li>
                    <li><a href="/software-solutions/career-portal" class="text-sm text-white/60 hover:text-accent transition">Career Portal</a></li>
                    <li><a href="/software-solutions" class="text-sm text-white/60 hover:text-accent transition">All Products</a></li>
                </ul>
            </div>
            @endif

            {{-- Resources --}}
            <div>
                <h4 class="font-semibold text-sm mb-4 text-white/90">Resources</h4>
                <ul class="space-y-3">
                    <li><a href="/resources/blog" class="text-sm text-white/60 hover:text-accent transition">Blog</a></li>
                    <li><a href="/resources/whitepapers" class="text-sm text-white/60 hover:text-accent transition">Whitepapers</a></li>
                    <li><a href="/resources/cbn-hub" class="text-sm text-white/60 hover:text-accent transition">CBN Hub</a></li>
                    <li><a href="/demo" class="text-sm text-white/60 hover:text-accent transition">Request Demo</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h4 class="font-semibold text-sm mb-4 text-white/90">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/about" class="text-sm text-white/60 hover:text-accent transition">About Us</a></li>
                    <li><a href="/careers" class="text-sm text-white/60 hover:text-accent transition">Careers</a></li>
                    <li><a href="/partners" class="text-sm text-white/60 hover:text-accent transition">Partners</a></li>
                    <li><a href="/legal/privacy" class="text-sm text-white/60 hover:text-accent transition">Privacy Policy</a></li>
                    <li><a href="/legal/terms" class="text-sm text-white/60 hover:text-accent transition">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-white/40">&copy; {{ date('Y') }} Atheris Limited. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2 text-xs text-white/40">
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    NDPA 2023 Compliant
                </span>
                <span class="flex items-center gap-2 text-xs text-white/40">
                    <span class="w-2 h-2 bg-secondary rounded-full"></span>
                    Data Hosted in Lagos, Nigeria
                </span>
            </div>
        </div>
    </div>
</footer>
