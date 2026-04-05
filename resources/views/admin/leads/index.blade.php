<x-admin-layout title="Leads">
    <h2 class="text-xl font-bold mb-6">Lead Management</h2>
    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full"><thead><tr class="bg-gray-50 border-b border-border text-left"><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Name</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Email</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Company</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Type</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th><th class="p-4 text-xs font-semibold text-text-secondary uppercase">Date</th></tr></thead>
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
            </tr>
            @empty
            <tr><td colspan="6" class="p-8 text-center text-text-secondary">No leads yet.</td></tr>
            @endforelse
        </tbody></table>
    </div>
    <div class="mt-6">{{ $leads->links() }}</div>
</x-admin-layout>
