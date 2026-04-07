<x-admin-layout title="Add Product">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Add New Product</h2>
        <a href="{{ route('admin.products.index') }}" class="text-sm text-text-secondary hover:text-primary transition">&larr; Back to Products</a>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        {{-- Basic Info --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5">
            <h3 class="font-bold text-text-primary">Basic Information</h3>

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Title <span class="text-error">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" required>
                    @error('title') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Category</label>
                    <input type="text" name="category" value="{{ old('category') }}" placeholder="e.g., Facility Management, Agriculture Tech, HR Technology" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Tagline</label>
                <input type="text" name="tagline" value="{{ old('tagline') }}" placeholder="Short compelling tagline" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
            </div>

            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Description</label>
                <textarea name="description" rows="4" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">{{ old('description') }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Status</label>
                    <select name="status" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
            </div>
        </div>

        {{-- Images --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5">
            <h3 class="font-bold text-text-primary">Images</h3>
            <p class="text-sm text-text-secondary">Upload images to replace the placeholder graphics on the product page. Recommended: 1200x900px PNG or JPG.</p>

            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Hero Image</label>
                <input type="file" name="hero_image" accept="image/*" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm">
                <p class="text-xs text-text-secondary mt-1">Main product image shown in the hero section</p>
            </div>

            <div class="grid md:grid-cols-3 gap-5">
                @foreach([1, 2, 3] as $num)
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Screenshot {{ $num }}</label>
                    <input type="file" name="screenshot_{{ $num }}" accept="image/*" class="w-full border border-border rounded-lg px-4 py-2 text-sm">
                    <input type="text" name="screenshot_{{ $num }}_caption" value="{{ old("screenshot_{$num}_caption") }}" placeholder="Caption for screenshot {{ $num }}" class="w-full border border-border rounded-lg px-4 py-2 text-sm mt-2 focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                @endforeach
            </div>
        </div>

        {{-- Features --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ features: {{ json_encode(old('features', [['title' => '', 'desc' => '']])) }} }">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-text-primary">Features</h3>
                <button type="button" @click="features.push({title: '', desc: ''})" class="text-xs text-primary font-medium hover:text-accent">+ Add Feature</button>
            </div>
            <template x-for="(feature, index) in features" :key="index">
                <div class="flex gap-3 items-start">
                    <div class="flex-1 grid md:grid-cols-2 gap-3">
                        <input :name="'features['+index+'][title]'" x-model="feature.title" placeholder="Feature title" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <input :name="'features['+index+'][desc]'" x-model="feature.desc" placeholder="Feature description" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    </div>
                    <button type="button" @click="features.splice(index, 1)" class="text-error hover:text-error/80 text-lg mt-2">&times;</button>
                </div>
            </template>
        </div>

        {{-- Challenges --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ challenges: {{ json_encode(old('challenges', [['title' => '', 'desc' => '']])) }} }">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-text-primary">Challenges Solved</h3>
                <button type="button" @click="challenges.push({title: '', desc: ''})" class="text-xs text-primary font-medium hover:text-accent">+ Add Challenge</button>
            </div>
            <template x-for="(item, index) in challenges" :key="index">
                <div class="flex gap-3 items-start">
                    <div class="flex-1 grid md:grid-cols-2 gap-3">
                        <input :name="'challenges['+index+'][title]'" x-model="item.title" placeholder="Challenge title" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <input :name="'challenges['+index+'][desc]'" x-model="item.desc" placeholder="Description" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    </div>
                    <button type="button" @click="challenges.splice(index, 1)" class="text-error hover:text-error/80 text-lg mt-2">&times;</button>
                </div>
            </template>
        </div>

        {{-- Stats --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ stats: {{ json_encode(old('stats', [['metric' => '', 'label' => '']])) }} }">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-text-primary">Key Metrics / Stats</h3>
                <button type="button" @click="stats.push({metric: '', label: ''})" class="text-xs text-primary font-medium hover:text-accent">+ Add Stat</button>
            </div>
            <template x-for="(stat, index) in stats" :key="index">
                <div class="flex gap-3 items-start">
                    <div class="flex-1 grid md:grid-cols-2 gap-3">
                        <input :name="'stats['+index+'][metric]'" x-model="stat.metric" placeholder="e.g., 60%" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <input :name="'stats['+index+'][label]'" x-model="stat.label" placeholder="e.g., Faster check-in" class="border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    </div>
                    <button type="button" @click="stats.splice(index, 1)" class="text-error hover:text-error/80 text-lg mt-2">&times;</button>
                </div>
            </template>
        </div>

        {{-- How It Works --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ steps: {{ json_encode(old('how_it_works', [['step' => '01', 'title' => '', 'desc' => '']])) }} }">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-text-primary">How It Works</h3>
                <button type="button" @click="steps.push({step: String(steps.length+1).padStart(2,'0'), title: '', desc: ''})" class="text-xs text-primary font-medium hover:text-accent">+ Add Step</button>
            </div>
            <template x-for="(step, index) in steps" :key="index">
                <div class="flex gap-3 items-start">
                    <div class="flex-1 grid grid-cols-6 gap-3">
                        <input :name="'how_it_works['+index+'][step]'" x-model="step.step" placeholder="#" class="col-span-1 border border-border rounded-lg px-4 py-2.5 text-sm text-center focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <input :name="'how_it_works['+index+'][title]'" x-model="step.title" placeholder="Step title" class="col-span-2 border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <input :name="'how_it_works['+index+'][desc]'" x-model="step.desc" placeholder="Step description" class="col-span-3 border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    </div>
                    <button type="button" @click="steps.splice(index, 1)" class="text-error hover:text-error/80 text-lg mt-2">&times;</button>
                </div>
            </template>
        </div>

        {{-- SEO --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5">
            <h3 class="font-bold text-text-primary">SEO</h3>
            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Meta Description</label>
                <textarea name="meta_description" rows="2" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">{{ old('meta_description') }}</textarea>
            </div>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-6 py-2.5 rounded-lg transition">Create Product</button>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-100 hover:bg-gray-200 text-text-primary font-semibold text-sm px-6 py-2.5 rounded-lg transition">Cancel</a>
        </div>
    </form>
</x-admin-layout>
