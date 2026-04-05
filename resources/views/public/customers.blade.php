<x-app-layout metaTitle="Customer Stories — Atheris GRC">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{!! App\Models\Setting::get('page_customers_hero_title', 'Customer <span class="text-accent">Success Stories</span>') !!}</h1><p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_customers_hero_subtitle', 'See how leading Nigerian financial institutions transform their GRC with Atheris.') }}</p></div></section>
    <section class="py-20 bg-bg"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials as $t)
            <div class="bg-white rounded-2xl p-8 border border-border shadow-sm">
                <div class="flex gap-1 mb-4">@for($i=0;$i<5;$i++)<svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor</div>
                <blockquote class="text-text-primary mb-6">"{{ $t->quote }}"</blockquote>
                <div class="flex items-center gap-3"><div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">{{ substr($t->author_name, 0, 1) }}</div><div><div class="font-semibold text-sm">{{ $t->author_name }}</div><div class="text-xs text-text-secondary">{{ $t->author_title }}, {{ $t->company }}</div></div></div>
            </div>
            @endforeach
        </div>
    </div></section>
</x-app-layout>
