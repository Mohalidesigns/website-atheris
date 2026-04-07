<x-admin-layout title="Products">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-xl font-bold">Software Products</h2>
            <p class="text-sm text-text-secondary mt-1">Manage VMS, Poultry Management, Career Portal, and more</p>
        </div>
        <a href="{{ route('admin.products.create') }}" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Product
        </a>
    </div>

    @if(session('success'))
    <div class="bg-secondary/10 text-secondary text-sm p-4 rounded-lg mb-6">{{ session('success') }}</div>
    @endif

    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 border-b border-border text-left">
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Image</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Title</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Category</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Screenshots</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Order</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                @forelse($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="p-4">
                        @if($product->hero_image)
                            <img src="{{ asset('storage/' . $product->hero_image) }}" alt="" class="w-16 h-12 object-cover rounded-lg border border-border">
                        @else
                            <div class="w-16 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        @endif
                    </td>
                    <td class="p-4">
                        <div class="text-sm font-medium">{{ $product->title }}</div>
                        <div class="text-xs text-text-secondary">/software-solutions/{{ $product->slug }}</div>
                    </td>
                    <td class="p-4 text-sm text-text-secondary">{{ $product->category ?? '—' }}</td>
                    <td class="p-4">
                        <div class="flex gap-1">
                            @foreach(['screenshot_1', 'screenshot_2', 'screenshot_3'] as $ss)
                                <div class="w-6 h-6 rounded {{ $product->$ss ? 'bg-secondary/20' : 'bg-gray-100' }} flex items-center justify-center">
                                    @if($product->$ss)
                                        <svg class="w-3 h-3 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    @else
                                        <span class="text-[10px] text-gray-400">—</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </td>
                    <td class="p-4"><span class="text-xs px-2 py-1 rounded-full {{ $product->status === 'published' ? 'bg-secondary/10 text-secondary' : 'bg-gray-100 text-text-secondary' }}">{{ ucfirst($product->status) }}</span></td>
                    <td class="p-4 text-sm text-text-secondary">{{ $product->sort_order }}</td>
                    <td class="p-4 flex items-center gap-3">
                        <a href="{{ route('admin.products.edit', $product) }}" class="text-xs text-primary hover:text-accent font-medium">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">@csrf @method('DELETE')
                            <button type="submit" class="text-xs text-error hover:text-error/80 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="p-8 text-center text-text-secondary">No products yet. <a href="{{ route('admin.products.create') }}" class="text-primary font-medium">Create one</a></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
