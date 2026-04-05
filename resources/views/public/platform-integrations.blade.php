<x-app-layout metaTitle="Integrations — Atheris GRC" metaDescription="Connect Atheris GRC with your existing tools and systems.">
    {{-- Hero --}}
    <section class="bg-gradient-hero text-white py-20 lg:py-28 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-white/10 text-white/90 text-sm font-semibold px-4 py-1.5 rounded-full mb-6 border border-white/10">Integrations</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">{!! App\Models\Setting::get('page_integrations_hero_title', 'Connect Your <span class="text-accent">Entire Ecosystem</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_integrations_hero_subtitle', 'Atheris integrates seamlessly with the tools your team already uses — from core banking systems to collaboration platforms.') }}</p>
        </div>
    </section>

    {{-- Integration Categories --}}
    <section class="py-20 lg:py-28 bg-bg bg-mesh">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
            $categories = [
                ['title' => 'Core Banking & Finance', 'desc' => 'Direct integrations with leading banking platforms', 'items' => [
                    ['name' => 'Finacle', 'desc' => 'Infosys core banking integration', 'status' => 'Available'],
                    ['name' => 'T24 Temenos', 'desc' => 'Real-time transaction data sync', 'status' => 'Available'],
                    ['name' => 'Flexcube', 'desc' => 'Oracle banking platform connector', 'status' => 'Available'],
                    ['name' => 'BankOne', 'desc' => 'Nigerian banking software integration', 'status' => 'Available'],
                ]],
                ['title' => 'Communication & Collaboration', 'desc' => 'Keep teams aligned with automated notifications', 'items' => [
                    ['name' => 'Microsoft Teams', 'desc' => 'Channel notifications & task assignments', 'status' => 'Available'],
                    ['name' => 'Slack', 'desc' => 'Alerts, approvals, and updates', 'status' => 'Available'],
                    ['name' => 'Microsoft Outlook', 'desc' => 'Email notifications & calendar sync', 'status' => 'Available'],
                    ['name' => 'Google Workspace', 'desc' => 'Gmail, Calendar, and Drive integration', 'status' => 'Coming Soon'],
                ]],
                ['title' => 'Security & Identity', 'desc' => 'Enterprise-grade authentication and access', 'items' => [
                    ['name' => 'Azure AD / Entra', 'desc' => 'SSO and directory sync', 'status' => 'Available'],
                    ['name' => 'Okta', 'desc' => 'Identity management integration', 'status' => 'Available'],
                    ['name' => 'CrowdStrike', 'desc' => 'Security event correlation', 'status' => 'Coming Soon'],
                    ['name' => 'Splunk', 'desc' => 'SIEM log integration', 'status' => 'Coming Soon'],
                ]],
                ['title' => 'Data & Analytics', 'desc' => 'Export and visualize your GRC data anywhere', 'items' => [
                    ['name' => 'Power BI', 'desc' => 'Custom dashboards and reports', 'status' => 'Available'],
                    ['name' => 'Tableau', 'desc' => 'Advanced data visualization', 'status' => 'Available'],
                    ['name' => 'REST API', 'desc' => 'Full API access for custom integrations', 'status' => 'Available'],
                    ['name' => 'Webhooks', 'desc' => 'Real-time event notifications', 'status' => 'Available'],
                ]],
            ];
            @endphp

            @foreach($categories as $catIndex => $category)
            <div class="mb-16 last:mb-0" x-data x-intersect="$el.classList.add('animate-slide-up')">
                <div class="mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-text-primary mb-2">{{ $category['title'] }}</h2>
                    <p class="text-text-secondary">{{ $category['desc'] }}</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($category['items'] as $item)
                    <div class="bg-white rounded-2xl p-6 border border-border card-hover">
                        <div class="w-14 h-14 rounded-xl bg-primary/5 flex items-center justify-center mb-4">
                            <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center text-xs font-bold text-primary">{{ substr($item['name'], 0, 2) }}</div>
                        </div>
                        <h3 class="font-bold text-text-primary mb-1">{{ $item['name'] }}</h3>
                        <p class="text-sm text-text-secondary mb-4">{{ $item['desc'] }}</p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold {{ $item['status'] === 'Available' ? 'text-secondary' : 'text-warning' }}">
                            <span class="w-2 h-2 rounded-full {{ $item['status'] === 'Available' ? 'bg-secondary' : 'bg-warning' }}"></span>
                            {{ $item['status'] }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Custom Integration CTA --}}
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-text-primary mb-4">Need a custom integration?</h2>
            <p class="text-lg text-text-secondary mb-8">Our API-first architecture supports custom integrations with any system. Our team will work with you to connect Atheris to your unique tech stack.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    Talk to Our Team
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="#" class="inline-flex items-center gap-2 bg-primary/5 hover:bg-primary/10 text-primary font-semibold px-8 py-4 rounded-xl transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    View API Docs
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
