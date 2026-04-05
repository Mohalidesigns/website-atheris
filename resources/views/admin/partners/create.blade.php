<x-admin-layout title="Add Partner">
    <div class="max-w-2xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Add Partner</h2>
            <a href="{{ route('admin.partners.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Partners</a>
        </div>
        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    @error('name') <p class="text-error text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Logo</label>
                    <input type="file" name="logo" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                    <p class="text-xs text-text-secondary mt-1">Recommended: 320x128px or similar (PNG/SVG with transparent background)</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Website</label>
                    <input type="url" name="website" value="{{ old('website') }}" placeholder="https://..." class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">Description</label>
                    <textarea name="description" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ old('description') }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Type</label>
                        <select name="type" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                            <option value="client">Client</option>
                            <option value="partner">Partner</option>
                            <option value="integration">Integration</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-1.5">Sort Order</label>
                        <input type="number" name="sort_order" value="{{ old('sort_order', 0) }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="is_active" value="1" checked id="is_active" class="rounded border-border text-primary focus:ring-primary">
                    <label for="is_active" class="text-sm font-medium text-text-primary">Active</label>
                </div>
            </div>
            <div class="flex gap-3">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Add Partner</button>
                <a href="{{ route('admin.partners.index') }}" class="bg-white border border-border text-text-secondary font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
