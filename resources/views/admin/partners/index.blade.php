<x-admin-layout title="Partners">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Partners & Clients</h2>
        <a href="{{ route('admin.partners.create') }}" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Partner
        </a>
    </div>
    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 border-b border-border text-left">
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Logo</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Name</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Type</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Order</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                @foreach($partners as $partner)
                <tr class="hover:bg-gray-50">
                    <td class="p-4">
                        @if($partner->logo)
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="h-10 w-20 object-contain rounded border border-border bg-white">
                        @else
                            <div class="h-10 w-20 bg-gray-100 rounded border border-border flex items-center justify-center text-xs text-text-secondary/50">No logo</div>
                        @endif
                    </td>
                    <td class="p-4 text-sm font-medium">{{ $partner->name }}</td>
                    <td class="p-4"><span class="text-xs px-2 py-1 rounded-full bg-primary/10 text-primary capitalize">{{ $partner->type }}</span></td>
                    <td class="p-4"><span class="text-xs px-2 py-1 rounded-full {{ $partner->is_active ? 'bg-secondary/10 text-secondary' : 'bg-gray-100 text-text-secondary' }}">{{ $partner->is_active ? 'Active' : 'Inactive' }}</span></td>
                    <td class="p-4 text-sm text-text-secondary">{{ $partner->sort_order }}</td>
                    <td class="p-4 flex items-center gap-3">
                        <a href="{{ route('admin.partners.edit', $partner) }}" class="text-xs text-primary hover:text-accent font-medium">Edit</a>
                        <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" onsubmit="return confirm('Delete this partner?')">@csrf @method('DELETE')
                            <button type="submit" class="text-xs text-error hover:text-error/80 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if($partners->isEmpty())
            <div class="p-12 text-center text-text-secondary text-sm">No partners yet. <a href="{{ route('admin.partners.create') }}" class="text-primary font-medium">Add your first partner.</a></div>
        @endif
    </div>
</x-admin-layout>
