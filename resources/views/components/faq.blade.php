@props([
    'items' => [],
    'title' => 'Frequently Asked Questions',
    'intro' => null,
])
@php
    $faqItems = collect($items)
        ->filter(fn ($i) => !empty($i['q']) && !empty($i['a']))
        ->values();
@endphp
@if($faqItems->isNotEmpty())
<section class="py-16 md:py-20 bg-bg border-t border-border">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-text-primary mb-3">{{ $title }}</h2>
            @if($intro)<p class="text-text-secondary">{{ $intro }}</p>@endif
        </div>
        <div class="space-y-3" x-data="{ open: 0 }">
            @foreach($faqItems as $i => $f)
            <div class="bg-white rounded-xl border border-border overflow-hidden">
                <button type="button" @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                        class="w-full flex items-center justify-between gap-4 text-left p-5 hover:bg-bg transition"
                        :aria-expanded="open === {{ $i }}">
                    <span class="font-semibold text-text-primary">{{ $f['q'] }}</span>
                    <svg class="w-5 h-5 text-primary shrink-0 transition-transform" :class="{ 'rotate-180': open === {{ $i }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open === {{ $i }}" x-collapse class="px-5 pb-5 text-text-secondary text-sm leading-relaxed">{{ $f['a'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@php
    $faqLd = [
        '@context' => 'https://schema.org',
        '@type'    => 'FAQPage',
        'mainEntity' => $faqItems->map(fn ($f) => [
            '@type' => 'Question',
            'name'  => $f['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ])->values()->all(),
    ];
@endphp
<script type="application/ld+json">{!! json_encode($faqLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif
