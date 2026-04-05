<x-admin-layout title="Lead Detail">
    <div class="max-w-2xl">
        <a href="{{ route('admin.leads.index') }}" class="text-sm text-text-secondary hover:text-primary mb-4 inline-block">&larr; Back to Leads</a>
        <div class="bg-white rounded-xl border border-border p-6 space-y-4">
            <h2 class="text-xl font-bold">{{ $lead->first_name }} {{ $lead->last_name }}</h2>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div><span class="text-text-secondary">Email:</span> <span class="font-medium">{{ $lead->email }}</span></div>
                <div><span class="text-text-secondary">Phone:</span> <span class="font-medium">{{ $lead->phone ?? '—' }}</span></div>
                <div><span class="text-text-secondary">Company:</span> <span class="font-medium">{{ $lead->company ?? '—' }}</span></div>
                <div><span class="text-text-secondary">Role:</span> <span class="font-medium">{{ $lead->role ?? '—' }}</span></div>
                <div><span class="text-text-secondary">Source:</span> <span class="font-medium">{{ $lead->source }}</span></div>
                <div><span class="text-text-secondary">Type:</span> <span class="font-medium">{{ $lead->form_type }}</span></div>
            </div>
            @if($lead->message)<div class="pt-4 border-t border-border"><span class="text-sm text-text-secondary">Message:</span><p class="mt-1 text-sm">{{ $lead->message }}</p></div>@endif
        </div>
    </div>
</x-admin-layout>
