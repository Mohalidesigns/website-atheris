<x-app-layout metaTitle="Security & Trust — Atheris GRC">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">{{ App\Models\Setting::get('page_security_hero_title', 'Security & Trust Center') }}</h1>
            <p class="text-lg text-white/70 max-w-3xl mx-auto">{{ App\Models\Setting::get('page_security_hero_subtitle', 'Enterprise-grade security with Nigerian data residency compliance. Your data never leaves Africa.') }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Data Residency', 'desc' => 'All data hosted on AWS Lagos (af-south-1). Zero cross-border data transfer in compliance with NDPA 2023.', 'badge' => 'NDPA Compliant'],
                    ['title' => 'Encryption', 'desc' => 'AES-256 encryption at rest, TLS 1.3 in transit. End-to-end encryption for all sensitive data.', 'badge' => 'AES-256'],
                    ['title' => 'Access Control', 'desc' => 'Role-based access with 2FA enforcement. Admin actions fully audited with immutable logs.', 'badge' => '2FA Required'],
                    ['title' => 'OWASP Compliance', 'desc' => 'Full OWASP Top 10 protection including XSS, CSRF, SQL injection, and IDOR prevention.', 'badge' => 'OWASP'],
                    ['title' => 'SOC 2 Type II', 'desc' => 'Annual SOC 2 Type II audit covering security, availability, and confidentiality controls.', 'badge' => 'SOC 2'],
                    ['title' => '99.9% Uptime', 'desc' => 'Guaranteed uptime SLA with redundant infrastructure, automated failover, and 24/7 monitoring.', 'badge' => 'SLA'],
                ] as $item)
                <div class="bg-bg rounded-2xl p-8 border border-border">
                    <span class="inline-block bg-secondary/10 text-secondary text-xs font-bold px-3 py-1 rounded-full mb-4">{{ $item['badge'] }}</span>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
