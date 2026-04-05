<x-app-layout metaTitle="Atheris vs Archer IRM">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">{!! App\Models\Setting::get('page_vs_archer_hero_title', 'Atheris vs. <span class="text-accent">Archer IRM</span>') !!}</h1><p class="text-lg text-white/70 max-w-3xl mx-auto">{{ App\Models\Setting::get('page_vs_archer_hero_subtitle', 'A feature-by-feature comparison for African financial institutions.') }}</p></div></section>
    <section class="py-20 bg-white"><div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-2xl border border-border"><table class="w-full"><thead><tr class="bg-bg"><th class="text-left p-6 font-semibold">Feature</th><th class="p-6 text-center font-semibold text-accent">Atheris</th><th class="p-6 text-center font-semibold text-text-secondary">Archer IRM</th></tr></thead><tbody class="divide-y divide-border">
        @foreach([['Nigerian Regulatory Content', 'Pre-built', 'None'], ['Deployment', 'Cloud-native, 8 weeks', 'On-premise heavy, 12+ months'], ['AI Capabilities', 'Core platform', 'Limited'], ['Pricing', 'Naira, transparent', 'USD, complex licensing'], ['Modern UI', 'React + Tailwind', 'Legacy interface'], ['African Support', 'Lagos-based', 'No local presence']] as $r)
        <tr><td class="p-6 font-medium text-sm">{{ $r[0] }}</td><td class="p-6 text-center text-sm text-secondary font-medium">{{ $r[1] }}</td><td class="p-6 text-center text-sm text-text-secondary">{{ $r[2] }}</td></tr>
        @endforeach
        </tbody></table></div>
        <div class="text-center mt-12"><a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Request Demo</a></div>
    </div></section>
</x-app-layout>
