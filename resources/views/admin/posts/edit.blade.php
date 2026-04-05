<x-admin-layout title="Edit Post">
    <div class="max-w-4xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Edit Post</h2>
            <a href="{{ route('admin.posts.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back</a>
        </div>
        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <div><label class="block text-sm font-medium mb-1.5">Title *</label><input type="text" name="title" value="{{ old('title', $post->title) }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"></div>
                <div><label class="block text-sm font-medium mb-1.5">Excerpt</label><textarea name="excerpt" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ old('excerpt', $post->excerpt) }}</textarea></div>
                <div><label class="block text-sm font-medium mb-1.5">Body</label><textarea name="body" rows="12" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm font-mono">{{ old('body', $post->body) }}</textarea></div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium mb-1.5">Category</label><select name="category_id" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"><option value="">Select</option>@foreach($categories as $cat)<option value="{{ $cat->id }}" {{ $post->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>@endforeach</select></div>
                    <div><label class="block text-sm font-medium mb-1.5">Status</label><select name="status" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"><option value="draft" {{ $post->status === 'draft' ? 'selected' : '' }}>Draft</option><option value="published" {{ $post->status === 'published' ? 'selected' : '' }}>Published</option><option value="archived" {{ $post->status === 'archived' ? 'selected' : '' }}>Archived</option></select></div>
                </div>
                <div><label class="block text-sm font-medium mb-1.5">Featured Image</label><input type="file" name="featured_image" accept="image/*" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary">@if($post->featured_image)<p class="text-xs text-text-secondary mt-1">Current: {{ $post->featured_image }}</p>@endif</div>
            </div>
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <h3 class="font-semibold">SEO</h3>
                <div><label class="block text-sm font-medium mb-1.5">Meta Title</label><input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"></div>
                <div><label class="block text-sm font-medium mb-1.5">Meta Description</label><textarea name="meta_description" rows="2" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm resize-none">{{ old('meta_description', $post->meta_description) }}</textarea></div>
            </div>
            <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Update Post</button>
        </form>
    </div>
</x-admin-layout>
