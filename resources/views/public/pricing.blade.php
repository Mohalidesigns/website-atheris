<x-app-layout metaTitle="Pricing — Atheris GRC Platform">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{{ App\Models\Setting::get('page_pricing_hero_title', 'Transparent Naira Pricing') }}</h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_pricing_hero_subtitle', 'Zero FX risk. No hidden fees. Enterprise GRC at African-friendly pricing.') }}</p>
        </div>
    </section>

    {{-- Pricing Cards --}}
    <section class="py-20 bg-bg -mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8 lg:gap-10">
                {{-- Starter --}}
                <div class="bg-white rounded-2xl border border-border p-8 hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-text-primary mb-2">Starter</h3>
                        <p class="text-sm text-text-secondary">For microfinance & small banks</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-sm text-text-secondary">From</span>
                        <div class="text-4xl font-extrabold text-text-primary">₦2.5M<span class="text-lg font-normal text-text-secondary">/year</span></div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach(['3 GRC modules', 'Up to 25 users', 'Basic reporting', 'Email support', 'CBN frameworks included', '99.5% uptime SLA'] as $f)
                        <li class="flex items-center gap-3 text-sm text-text-secondary"><svg class="w-5 h-5 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="/demo" class="block text-center bg-white border-2 border-primary text-primary font-semibold py-3 rounded-xl hover:bg-primary hover:text-white transition">Get Started</a>
                </div>

                {{-- Professional (Featured) --}}
                <div class="bg-white rounded-2xl border-2 border-accent p-8 shadow-xl relative">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white text-xs font-bold px-4 py-1.5 rounded-full">Most Popular</div>
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-text-primary mb-2">Professional</h3>
                        <p class="text-sm text-text-secondary">For mid-tier banks & insurance</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-sm text-text-secondary">From</span>
                        <div class="text-4xl font-extrabold text-text-primary">₦8M<span class="text-lg font-normal text-text-secondary">/year</span></div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach(['All 6 GRC modules', 'Up to 100 users', 'AI-powered features', 'API access', 'Priority support', '99.9% uptime SLA', 'Custom dashboards', 'Advanced analytics'] as $f)
                        <li class="flex items-center gap-3 text-sm text-text-primary"><svg class="w-5 h-5 text-accent shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="/demo" class="block text-center bg-accent hover:bg-accent-light text-white font-bold py-3 rounded-xl transition shadow-lg">Get Started</a>
                </div>

                {{-- Enterprise --}}
                <div class="bg-white rounded-2xl border border-border p-8 hover:shadow-xl transition-shadow">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-text-primary mb-2">Enterprise</h3>
                        <p class="text-sm text-text-secondary">For Tier-1 banks & conglomerates</p>
                    </div>
                    <div class="mb-8">
                        <span class="text-sm text-text-secondary">&nbsp;</span>
                        <div class="text-4xl font-extrabold text-text-primary">Custom</div>
                    </div>
                    <ul class="space-y-3 mb-8">
                        @foreach(['Unlimited users', 'Custom modules', 'Dedicated CSM', 'On-premise option', 'White-glove onboarding', '99.99% uptime SLA', 'SSO / SAML', 'Custom integrations'] as $f)
                        <li class="flex items-center gap-3 text-sm text-text-secondary"><svg class="w-5 h-5 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> {{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="/demo" class="block text-center bg-primary hover:bg-primary-light text-white font-semibold py-3 rounded-xl transition">Talk to Sales</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-text-primary text-center mb-12">Frequently Asked Questions</h2>
            <div class="space-y-4" x-data="{ openFaq: null }">
                @foreach($faqs as $faq)
                <div class="border border-border rounded-xl overflow-hidden">
                    <button @click="openFaq = openFaq === {{ $faq->id }} ? null : {{ $faq->id }}" class="w-full flex justify-between items-center p-6 text-left hover:bg-bg transition">
                        <span class="font-semibold text-text-primary pr-4">{{ $faq->question }}</span>
                        <svg class="w-5 h-5 text-text-secondary shrink-0 transition-transform" :class="{ 'rotate-180': openFaq === {{ $faq->id }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === {{ $faq->id }}" x-collapse>
                        <div class="px-6 pb-6 text-sm text-text-secondary leading-relaxed">{{ $faq->answer }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
