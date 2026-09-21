<x-admin-layout title="Leads">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Lead Management</h2>
        @if(($testLeadCount ?? 0) > 0)
        <form action="{{ route('admin.leads.destroy-test') }}" method="POST" onsubmit="return confirm('Delete all {{ $testLeadCount }} test lead(s) with @example.com emails? This cannot be undone.');">
            @csrf @method('DELETE')
            <button type="submit" class="inline-flex items-center gap-2 text-sm font-medium text-error border border-error/30 hover:bg-error/5 px-4 py-2 rounded-lg transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                Delete {{ $testLeadCount }} test lead{{ $testLeadCount === 1 ? '' : 's' }}
            </button>
        </form>
        @endif
    </div>
    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full"><thead><tr class="bg-gray-50 border-b border-border text-left"><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Name</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Email</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Company</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Type</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Date</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase text-right">Actions</th></tr></thead>
        <tbody class="divide-y divide-border">
            @forelse($leads as $lead)
            <tr class="hover:bg-gray-50">
                <td class="p-4 text-sm font-medium">{{ $lead->first_name }} {{ $lead->last_name }}</td>
                <td class="p-4 text-sm text-text-secondary">{{ $lead->email }}</td>
                <td class="p-4 text-sm text-text-secondary">{{ $lead->company ?? '—' }}</td>
                <td class="p-4"><span class="text-xs bg-primary/10 text-primary px-2 py-1 rounded-full">{{ $lead->form_type }}</span></td>
                <td class="p-4">
                    <form action="{{ route('admin.leads.status', $lead) }}" method="POST" class="inline">@csrf @method('PATCH')
                        <select name="status" onchange="this.form.submit()" class="text-xs border border-border rounded-lg px-2 py-1">
                            @foreach(['new','contacted','qualified','converted','lost'] as $s)<option value="{{ $s }}" {{ $lead->status === $s ? 'selected' : '' }}>{{ ucfirst($s) }}</option>@endforeach
                        </select>
                    </form>
                </td>
                <td class="p-4 text-sm text-text-secondary">{{ $lead->created_at->format('M d, Y') }}</td>
                <td class="p-4 text-right">
                    <form action="{{ route('admin.leads.destroy', $lead) }}" method="POST" class="inline" onsubmit="return confirm('Delete this lead permanently? This cannot be undone.');">@csrf @method('DELETE')
                        <button type="submit" class="text-xs font-medium text-error hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" class="p-8 text-center text-text-secondary">No leads yet.</td></tr>
            @endforelse
        </tbody></table>
    </div>
    <div class="mt-6">{{ $leads->links() }}</div>
</x-admin-layout>
