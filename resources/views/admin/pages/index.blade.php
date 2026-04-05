<x-admin-layout title="Pages">
    <h2 class="text-xl font-bold mb-6">Page Content Management</h2>
    <p class="text-sm text-text-secondary mb-8">Edit text content for each page. Changes are reflected instantly on the live site.</p>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        {{-- Hero Slides Card --}}
        <a href="{{ route('admin.pages.hero-slides') }}" class="bg-white rounded-xl border border-border p-6 hover:border-accent/30 hover:shadow-md transition group">
            <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-accent/20 transition">
                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <h3 class="font-semibold text-text-primary mb-1">Hero Slides</h3>
            <p class="text-xs text-text-secondary">Manage up to 3 homepage hero slides with images and CTAs</p>
        </a>

        {{-- Page Group Cards --}}
        @foreach($pageGroups as $group => $info)
        <a href="{{ route('admin.pages.edit', $group) }}" class="bg-white rounded-xl border border-border p-6 hover:border-primary/30 hover:shadow-md transition group">
            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary/20 transition">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
            </div>
            <h3 class="font-semibold text-text-primary mb-1">{{ $info['label'] }}</h3>
            <p class="text-xs text-text-secondary">{{ $info['desc'] }}</p>
        </a>
        @endforeach
    </div>
</x-admin-layout>
