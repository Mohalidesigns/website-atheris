<x-admin-layout title="Create Post">
    <div class="max-w-4xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Create New Post</h2>
            <a href="{{ route('admin.posts.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Posts</a>
        </div>

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Title *</label>
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    @error('title') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Excerpt</label>
                    <textarea name="excerpt" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ old('excerpt') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Body</label>
                    <div class="border border-border rounded-lg overflow-hidden focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20">
                        <div class="bg-gray-50 border-b border-border px-3 py-2 flex items-center gap-1 text-text-secondary">
                            <span class="text-xs font-medium">Supports HTML</span>
                            <span class="mx-2 text-border">|</span>
                            <span class="text-xs"><code class="bg-white px-1.5 py-0.5 rounded border border-border">&lt;h2&gt;</code></span>
                            <span class="text-xs"><code class="bg-white px-1.5 py-0.5 rounded border border-border">&lt;p&gt;</code></span>
                            <span class="text-xs"><code class="bg-white px-1.5 py-0.5 rounded border border-border">&lt;ul&gt;</code></span>
                            <span class="text-xs"><code class="bg-white px-1.5 py-0.5 rounded border border-border">&lt;strong&gt;</code></span>
                            <span class="text-xs"><code class="bg-white px-1.5 py-0.5 rounded border border-border">&lt;blockquote&gt;</code></span>
                        </div>
                        <textarea name="body" rows="16" class="w-full px-4 py-3 outline-none text-sm font-mono border-0 resize-y min-h-[300px]" placeholder="Write your blog post content here using HTML...">{{ old('body') }}</textarea>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Tags</label>
                    <input type="text" name="tags" value="{{ old('tags') }}" placeholder="Separate tags with commas: compliance, CBN, audit" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    <p class="text-xs text-text-secondary mt-1">Comma-separated list of tags for this post.</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Category</label>
                        <select name="category_id" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                            <option value="">Select category</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Status</label>
                        <select name="status" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Featured Image</label>
                    <input type="file" name="featured_image" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                </div>
            </div>

            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <h3 class="font-semibold text-text-primary">SEO Settings</h3>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Meta Description</label>
                    <textarea name="meta_description" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ old('meta_description') }}</textarea>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Create Post</button>
                <a href="{{ route('admin.posts.index') }}" class="bg-white border border-border text-text-secondary font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
