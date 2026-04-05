<x-admin-layout title="Edit Partner">
    <div class="max-w-2xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Edit Partner</h2>
            <a href="{{ route('admin.partners.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Partners</a>
        </div>
        <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Name *</label>
                    <input type="text" name="name" value="{{ $partner->name }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    @error('name') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Logo</label>
                    @if($partner->logo)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="h-16 rounded-lg border border-border bg-white p-2">
                        </div>
                    @endif
                    <input type="file" name="logo" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                    <p class="text-xs text-text-secondary mt-1">Recommended: 320x128px (PNG/SVG with transparent background). Leave empty to keep current logo.</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Website</label>
                    <input type="url" name="website" value="{{ $partner->website }}" placeholder="https://..." class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Description</label>
                    <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ $partner->description }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Type</label>
                        <select name="type" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                            <option value="client" {{ $partner->type === 'client' ? 'selected' : '' }}>Client</option>
                            <option value="partner" {{ $partner->type === 'partner' ? 'selected' : '' }}>Partner</option>
                            <option value="integration" {{ $partner->type === 'integration' ? 'selected' : '' }}>Integration</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ $partner->sort_order }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" {{ $partner->is_active ? 'checked' : '' }} id="is_active" class="rounded border-border text-primary focus:ring-primary">
                    <label for="is_active" class="text-sm font-medium text-text-primary">Active</label>
                </div>
            </div>
            <div class="flex gap-3">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Update Partner</button>
                <a href="{{ route('admin.partners.index') }}" class="bg-white border border-border text-text-secondary font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
