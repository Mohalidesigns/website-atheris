<x-app-layout metaTitle="Atheris vs Diligent — Why Nigerian Banks Choose Atheris">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">{!! App\Models\Setting::get('page_vs_diligent_hero_title', 'Why Nigerian Banks Choose<br><span class="text-accent">Atheris Over Diligent</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-3xl mx-auto">{{ App\Models\Setting::get('page_vs_diligent_hero_subtitle', "Diligent is a great global platform. But it wasn't built for CBN guidelines, BOFIA 2020, or NDPA 2023. Atheris was.") }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-2xl border border-border">
                <table class="w-full">
                    <thead>
                        <tr class="bg-bg">
                            <th class="text-left p-6 font-semibold text-text-primary">Feature</th>
                            <th class="p-6 text-center font-semibold text-accent">Atheris</th>
                            <th class="p-6 text-center font-semibold text-text-secondary">Diligent</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        @foreach([
                            ['CBN/BOFIA Compliance', 'Pre-loaded, auto-updated', 'Manual configuration'],
                            ['Pricing Currency', 'Nigerian Naira (₦)', 'USD — FX risk'],
                            ['Data Residency', 'Nigeria (AWS Lagos)', 'Global cloud — NDPA risk'],
                            ['Time to Value', '6-8 weeks', '6-18 months'],
                            ['Nigerian Support', 'Lagos-based, same timezone', 'US/UK, 6-9hr lag'],
                            ['AI Intelligence', 'Built-in, foundation', 'Bolt-on, limited'],
                            ['NDPA 2023', 'Fully compliant', 'Requires customization'],
                            ['AML/CFT Content', 'Pre-loaded', 'Not included'],
                        ] as $row)
                        <tr>
                            <td class="p-6 font-medium text-text-primary text-sm">{{ $row[0] }}</td>
                            <td class="p-6 text-center text-sm"><span class="inline-flex items-center gap-1 text-secondary font-medium"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> {{ $row[1] }}</span></td>
                            <td class="p-6 text-center text-sm text-text-secondary">{{ $row[2] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-12">
                <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">See a Side-by-Side Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
            </div>
        </div>
    </section>
</x-app-layout>
