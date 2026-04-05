<x-admin-layout title="Solutions">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Solutions Management</h2>
        <a href="{{ route('admin.solutions.create') }}" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-4 py-2.5 rounded-lg transition inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add Solution
        </a>
    </div>
    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 border-b border-border text-left">
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Title</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Slug</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Order</th>
                    <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-border">
                @foreach($solutions as $s)
                <tr class="hover:bg-gray-50">
                    <td class="p-4 text-sm font-medium">{{ $s->title }}</td>
                    <td class="p-4 text-sm text-text-secondary">/solutions/{{ $s->slug }}</td>
                    <td class="p-4"><span class="text-xs px-2 py-1 rounded-full {{ $s->status === 'published' ? 'bg-secondary/10 text-secondary' : 'bg-gray-100 text-text-secondary' }}">{{ ucfirst($s->status) }}</span></td>
                    <td class="p-4 text-sm text-text-secondary">{{ $s->sort_order }}</td>
                    <td class="p-4 flex items-center gap-3">
                        <a href="{{ route('admin.solutions.edit', $s) }}" class="text-xs text-primary hover:text-accent font-medium">Edit</a>
                        <form action="{{ route('admin.solutions.destroy', $s) }}" method="POST" onsubmit="return confirm('Delete this solution?')">@csrf @method('DELETE')
                            <button type="submit" class="text-xs text-error hover:text-error/80 font-medium">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
