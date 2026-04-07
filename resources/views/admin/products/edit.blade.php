<x-admin-layout title="Edit Product">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold">Edit: {{ $product->title }}</h2>
            <p class="text-sm text-text-secondary">/software-solutions/{{ $product->slug }}</p>
        </div>
        <a href="{{ route('admin.products.index') }}" class="text-sm text-text-secondary hover:text-primary transition">&larr; Back to Products</a>
    </div>

    @if(session('success'))
    <div class="bg-secondary/10 text-secondary text-sm p-4 rounded-lg mb-6">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf @method('PUT')

        {{-- Basic Info --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5">
            <h3 class="font-bold text-text-primary">Basic Information</h3>

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Title <span class="text-error">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $product->title) }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" required>
                    @error('title') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Category</label>
                    <input type="text" name="category" value="{{ old('category', $product->category) }}" placeholder="e.g., Facility Management" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Tagline</label>
                <input type="text" name="tagline" value="{{ old('tagline', $product->tagline) }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
            </div>

            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Description</label>
                <textarea name="description" rows="4" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Status</label>
                    <select name="status" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="draft" {{ old('status', $product->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $product->status) === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $product->sort_order) }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
            </div>
        </div>

        {{-- Images --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5">
            <h3 class="font-bold text-text-primary">Images</h3>
            <p class="text-sm text-text-secondary">Upload images to replace the placeholder graphics on the product page. Recommended: 1200x900px.</p>

            {{-- Hero Image --}}
            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Hero Image</label>
                @if($product->hero_image)
                <div class="flex items-center gap-4 mb-2">
                    <img src="{{ asset('storage/' . $product->hero_image) }}" alt="Hero" class="h-24 rounded-lg border border-border object-cover">
                    <label class="flex items-center gap-2 text-sm text-text-secondary">
                        <input type="checkbox" name="remove_hero_image" value="1" class="rounded"> Remove
                    </label>
                </div>
                @endif
                <input type="file" name="hero_image" accept="image/*" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm">
            </div>

            {{-- Screenshots --}}
            <div class="grid md:grid-cols-3 gap-5">
                @foreach([1, 2, 3] as $num)
                @php $field = "screenshot_{$num}"; @endphp
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1">Screenshot {{ $num }}</label>
                    @if($product->$field)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->$field) }}" alt="Screenshot {{ $num }}" class="w-full h-32 rounded-lg border border-border object-cover object-top">
                        <label class="flex items-center gap-2 text-xs text-text-secondary mt-1">
                            <input type="checkbox" name="remove_screenshot_{{ $num }}" value="1" class="rounded"> Remove
                        </label>
                    </div>
                    @endif
                    <input type="file" name="screenshot_{{ $num }}" accept="image/*" class="w-full border border-border rounded-lg px-4 py-2 text-sm">
                    <input type="text" name="screenshot_{{ $num }}_caption" value="{{ old("screenshot_{$num}_caption", $product->{"screenshot_{$num}_caption"}) }}" placeholder="Caption" class="w-full border border-border rounded-lg px-4 py-2 text-sm mt-2 focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                @endforeach
            </div>
        </div>

        {{-- Features --}}
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ features: {{ json_encode(old('features', $product->features ?? [['title' => '', 'desc' => '']])) }} }">
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
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ challenges: {{ json_encode(old('challenges', $product->challenges ?? [['title' => '', 'desc' => '']])) }} }">
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
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ stats: {{ json_encode(old('stats', $product->stats ?? [['metric' => '', 'label' => '']])) }} }">
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
        <div class="bg-white rounded-xl border border-border p-6 space-y-5" x-data="{ steps: {{ json_encode(old('how_it_works', $product->how_it_works ?? [['step' => '01', 'title' => '', 'desc' => '']])) }} }">
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
                <input type="text" name="meta_title" value="{{ old('meta_title', $product->meta_title) }}" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-text-primary mb-1">Meta Description</label>
                <textarea name="meta_description" rows="2" class="w-full border border-border rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">{{ old('meta_description', $product->meta_description) }}</textarea>
            </div>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-6 py-2.5 rounded-lg transition">Update Product</button>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-100 hover:bg-gray-200 text-text-primary font-semibold text-sm px-6 py-2.5 rounded-lg transition">Cancel</a>
        </div>
    </form>
</x-admin-layout>
