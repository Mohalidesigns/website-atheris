<x-app-layout metaTitle="AI Risk Intelligence — Atheris GRC">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 bg-accent/20 text-accent text-sm font-medium px-4 py-2 rounded-full mb-6">Powered by AI</span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6">{!! App\Models\Setting::get('page_platform_ai_hero_title', 'AI Risk Intelligence<br><span class="text-accent">Engine</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-3xl mx-auto">{{ App\Models\Setting::get('page_platform_ai_hero_subtitle', 'Not bolted-on AI. Our intelligence engine is the foundation — predicting, automating, and monitoring your entire GRC landscape.') }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Predictive Risk Scoring', 'desc' => 'AI models trained on Nigerian financial data predict control failures before they happen, enabling proactive risk management.', 'icon' => 'trending-up'],
                    ['title' => 'Auto-Generated Observations', 'desc' => 'AI drafts audit observations from field notes, recommends risk ratings, and maps findings to CBN control categories.', 'icon' => 'edit'],
                    ['title' => 'Regulatory Change Monitor', 'desc' => 'Real-time monitoring of CBN circulars, BOFIA updates, and NDPA amendments with automated impact analysis.', 'icon' => 'bell'],
                    ['title' => 'Smart Control Testing', 'desc' => 'AI prioritizes which controls to test based on risk exposure, recent incidents, and regulatory focus areas.', 'icon' => 'check-square'],
                    ['title' => 'Natural Language Queries', 'desc' => 'Ask questions in plain English about your risk posture, compliance status, or audit findings and get instant answers.', 'icon' => 'message-circle'],
                    ['title' => 'Anomaly Detection', 'desc' => 'AI continuously monitors for unusual patterns in your risk data, control effectiveness, and compliance metrics.', 'icon' => 'alert-circle'],
                ] as $feature)
                <div class="bg-bg rounded-2xl p-8 border border-border hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl border border-border p-8">
                @if(App\Models\Setting::get('page_platform_ai_screenshot'))
                    <img src="{{ asset('storage/' . App\Models\Setting::get('page_platform_ai_screenshot')) }}" alt="AI Dashboard" class="w-full rounded-xl">
                @else
                <div class="aspect-[16/9] border border-dashed border-gray-200 rounded-xl flex items-center justify-center text-text-secondary/30">
                    <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg><p class="text-sm font-medium">AI Dashboard Screenshot</p><p class="text-xs mt-1">1200 x 675px</p></div>
                </div>
                @endif
            </div>
        </div>
    </section>
</x-app-layout>
