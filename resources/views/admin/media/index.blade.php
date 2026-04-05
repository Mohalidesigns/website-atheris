<x-admin-layout title="Media Library">
    <div class="flex items-center justify-between mb-6"><h2 class="text-xl font-bold">Media Library</h2></div>
    <div class="bg-white rounded-xl border border-border p-6 mb-8">
        <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" class="flex items-end gap-4">@csrf
            <div class="flex-1"><label class="block text-sm font-medium mb-1.5">Upload File</label><input type="file" name="file" required class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary"></div>
            <div class="flex-1"><label class="block text-sm font-medium mb-1.5">Alt Text</label><input type="text" name="alt_text" class="w-full px-4 py-2.5 rounded-lg border border-border outline-none text-sm"></div>
            <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-2.5 rounded-lg transition shrink-0">Upload</button>
        </form>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-4">
        @forelse($media as $item)
        <div class="bg-white rounded-lg border border-border overflow-hidden group relative">
            @if(str_starts_with($item->mime_type, 'image/'))
            <img src="{{ asset('storage/' . $item->path) }}" alt="{{ $item->alt_text }}" class="w-full aspect-square object-cover">
            @else
            <div class="w-full aspect-square bg-gray-50 flex items-center justify-center text-text-secondary/30"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
            @endif
            <div class="p-2"><p class="text-xs text-text-secondary truncate">{{ $item->original_filename }}</p></div>
            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center"><form action="{{ route('admin.media.destroy', $item) }}" method="POST" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="text-white text-xs bg-error px-3 py-1.5 rounded-lg">Delete</button></form></div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 text-text-secondary">No media files uploaded yet.</div>
        @endforelse
    </div>
    <div class="mt-6">{{ $media->links() }}</div>
</x-admin-layout>
