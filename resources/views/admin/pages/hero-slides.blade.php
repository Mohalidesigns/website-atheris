<x-admin-layout title="Hero Slides">
    <div class="max-w-4xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Hero Slider Manager</h2>
            <a href="{{ route('admin.pages.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Pages</a>
        </div>
        <p class="text-sm text-text-secondary mb-6">Manage up to 3 hero slides. Each slide has a title, subtitle, badge text, CTAs, and optional featured image. Slides auto-rotate every 6 seconds.</p>

        <form action="{{ route('admin.pages.hero-slides.update') }}" method="POST" enctype="multipart/form-data" x-data="{
            slides: [{{ implode(',', array_map(fn($i) => $i < count($slides) ? 'true' : 'false', range(0, 2))) }}],
            get slideCount() { return this.slides.filter(Boolean).length; },
            removeSlide(index) { this.slides[index] = false; },
            addSlide() { const i = this.slides.indexOf(false); if (i !== -1) this.slides[i] = true; }
        }" class="space-y-6">
            @csrf @method('PUT')

            @for($i = 0; $i < 3; $i++)
            <div class="bg-white rounded-xl border border-border p-6 space-y-4" x-show="slides[{{ $i }}]">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-text-primary">Slide {{ $i + 1 }}</h3>
                    <button type="button" x-show="slideCount > 1" @click="removeSlide({{ $i }})" class="text-xs text-error hover:text-error/80 font-medium">Remove Slide</button>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1.5">Title *</label>
                    <input type="text" name="slides[{{ $i }}][title]" value="{{ $slides[$i]['title'] ?? '' }}" x-bind:disabled="!slides[{{ $i }}]" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1.5">Subtitle</label>
                    <textarea name="slides[{{ $i }}][subtitle]" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ $slides[$i]['subtitle'] ?? '' }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1.5">Badge Text</label>
                    <input type="text" name="slides[{{ $i }}][badge]" value="{{ $slides[$i]['badge'] ?? '' }}" placeholder="e.g. Africa's #1 AI-First GRC Platform" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1.5">Primary CTA Text</label>
                        <input type="text" name="slides[{{ $i }}][cta_text]" value="{{ $slides[$i]['cta_text'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1.5">Primary CTA URL</label>
                        <input type="text" name="slides[{{ $i }}][cta_url]" value="{{ $slides[$i]['cta_url'] ?? '/demo' }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1.5">Secondary CTA Text</label>
                        <input type="text" name="slides[{{ $i }}][secondary_cta_text]" value="{{ $slides[$i]['secondary_cta_text'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1.5">Secondary CTA URL</label>
                        <input type="text" name="slides[{{ $i }}][secondary_cta_url]" value="{{ $slides[$i]['secondary_cta_url'] ?? '/platform' }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                </div>
                <div x-data="{ removeImage: false }">
                    <label class="block text-sm font-medium mb-1.5">Featured Image</label>
                    @if(!empty($slides[$i]['bg_image']))
                    <div class="mb-2 flex items-center gap-3" x-show="!removeImage">
                        <img src="{{ asset('storage/' . $slides[$i]['bg_image']) }}" alt="Slide {{ $i + 1 }}" class="h-20 rounded-lg border border-border">
                        <input type="hidden" name="slides[{{ $i }}][existing_bg_image]" value="{{ $slides[$i]['bg_image'] }}" x-bind:disabled="removeImage">
                        <button type="button" @click="removeImage = true" class="text-xs text-error hover:text-error/80 font-medium">Remove Image</button>
                    </div>
                    @endif
                    <input type="hidden" name="slides[{{ $i }}][remove_bg_image]" x-bind:value="removeImage ? '1' : '0'">
                    <input type="file" name="slides[{{ $i }}][bg_image]" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                    <p class="text-xs text-text-secondary mt-1">Recommended: 1200x900px (4:3). Displayed next to hero text. Leave empty for dashboard mockup.</p>
                </div>
            </div>
            @endfor

            <div class="flex items-center justify-between">
                <button type="button" x-show="slideCount < 3" @click="addSlide()" class="text-sm text-primary font-medium hover:text-accent inline-flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Add Another Slide
                </button>
                <span x-show="slideCount >= 3" class="text-xs text-text-secondary">Maximum 3 slides reached</span>
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Save Hero Slides</button>
            </div>
        </form>
    </div>
</x-admin-layout>
