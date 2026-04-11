<x-app-layout :metaTitle="$solution->meta_title ?? $solution->title . ' — Atheris GRC'" :metaDescription="$solution->meta_description ?? $solution->description">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/platform" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Back to Platform
                    </a>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">{{ $solution->tagline }}</h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">{{ $solution->description }}</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        @if($solution->hero_image)
                            <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="{{ $solution->title }}" class="rounded-xl w-full object-contain cursor-pointer" @click="$dispatch('open-lightbox', { src: $el.src, alt: $el.alt })">
                        @else
                            <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                                <div class="text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><p class="text-sm">{{ $solution->title }} Screenshot</p><p class="text-xs mt-1">1200 x 900px</p></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Challenges --}}
    @if($solution->challenges)
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-error/10 text-error text-sm font-semibold px-4 py-1.5 rounded-full mb-4">The Challenge</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Why Nigerian institutions need this</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($solution->challenges as $challenge)
                <div class="bg-white rounded-2xl p-8 border border-border shadow-sm">
                    <div class="w-12 h-12 bg-error/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $challenge['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $challenge['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Features --}}
    @if($solution->features)
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="inline-block bg-primary/5 text-primary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">Key Features</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Everything you need for {{ strtolower($solution->title) }}</h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($solution->features as $feature)
                <div class="bg-bg rounded-2xl p-8 border border-border hover:border-primary/20 hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition">
                        <svg class="w-6 h-6 text-primary group-hover:text-accent transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-primary mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- How It Works --}}
    @if($solution->how_it_works)
    <section class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block bg-secondary/10 text-secondary text-sm font-semibold px-4 py-1.5 rounded-full mb-4">How It Works</span>
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary">Get started in three simple steps</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 relative">
                <div class="hidden md:block absolute top-16 left-1/6 right-1/6 h-0.5 bg-border"></div>
                @foreach($solution->how_it_works as $step)
                <div class="text-center relative">
                    <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg relative z-10">{{ $step['step'] }}</div>
                    <h3 class="text-xl font-bold text-text-primary mb-3">{{ $step['title'] }}</h3>
                    <p class="text-sm text-text-secondary">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- ROI Metrics --}}
    @if($solution->roi_metrics)
    <section class="py-16 bg-gradient-hero">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-8 text-center">
                @foreach($solution->roi_metrics as $roi)
                <div>
                    <div class="text-3xl md:text-4xl font-extrabold text-accent mb-2">{{ $roi['metric'] }}</div>
                    <div class="text-sm text-white/60">{{ $roi['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Other Solutions --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Explore other modules</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($otherSolutions->take(3) as $other)
                <a href="/solutions/{{ $other->slug }}" class="group bg-bg rounded-xl p-6 border border-border hover:border-primary/20 hover:shadow-md transition-all">
                    <h3 class="font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $other->title }}</h3>
                    <p class="text-sm text-text-secondary line-clamp-2">{{ $other->description }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-bg border-t border-border">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-text-primary mb-4">See {{ $solution->title }} in action</h2>
            <p class="text-text-secondary mb-8">Book a personalized demo to see how Atheris can transform your {{ strtolower($solution->title) }} program.</p>
            <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
    </section>
</x-app-layout>
