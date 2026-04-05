@php
$industries = [
    'banks' => ['title' => 'Commercial Banks', 'desc' => 'Enterprise GRC for Tier-1 and Tier-2 Nigerian commercial banks.', 'challenges' => ['CBN examination readiness', 'BOFIA 2020 compliance', 'Basel III/IV alignment']],
    'microfinance' => ['title' => 'Microfinance Banks', 'desc' => 'Affordable GRC for microfinance institutions across Nigeria.', 'challenges' => ['Limited compliance resources', 'CBN licensing requirements', 'Operational risk management']],
    'insurance' => ['title' => 'Insurance Companies', 'desc' => 'GRC solutions for Nigerian insurance firms and brokers.', 'challenges' => ['NAICOM compliance', 'Claims risk management', 'Solvency requirements']],
    'capital-markets' => ['title' => 'Capital Markets', 'desc' => 'GRC for asset managers, stockbrokers, and investment firms.', 'challenges' => ['SEC compliance', 'Market risk management', 'AML/CFT obligations']],
];
$industry = $industries[$slug] ?? ['title' => 'Industry Solutions', 'desc' => 'GRC solutions for your industry.', 'challenges' => []];
@endphp
<x-app-layout :metaTitle="$industry['title'] . ' — Atheris GRC'">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{{ $industry['title'] }}</h1><p class="text-lg text-white/70 max-w-2xl mx-auto">{{ $industry['desc'] }}</p></div></section>
    <section class="py-20 bg-white"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(!empty($industry['challenges']))
        <div class="mb-16"><h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Key Challenges We Solve</h2>
        <div class="grid md:grid-cols-3 gap-6">@foreach($industry['challenges'] as $c)<div class="bg-bg rounded-xl p-6 border border-border text-center"><div class="w-12 h-12 bg-error/10 rounded-lg flex items-center justify-center mx-auto mb-4"><svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div><p class="font-semibold text-text-primary">{{ $c }}</p></div>@endforeach
        </div></div>
        @endif
        <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Recommended Modules</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($solutions as $s)
            <a href="/solutions/{{ $s->slug }}" class="group bg-bg rounded-xl p-6 border border-border hover:border-primary/20 hover:shadow-md transition"><h3 class="font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $s->title }}</h3><p class="text-sm text-text-secondary line-clamp-2">{{ $s->description }}</p></a>
            @endforeach
        </div>
        <div class="text-center mt-12"><a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Request a Demo</a></div>
    </div></section>
</x-app-layout>
