<x-admin-layout title="Team">
    <div class="flex items-center justify-between mb-6"><h2 class="text-xl font-bold">Team Members</h2><a href="{{ route('admin.team.create') }}" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition">+ Add Member</a></div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($members as $m)
        <div class="bg-white rounded-xl border border-border p-6">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary text-xl font-bold mb-4">{{ substr($m->name, 0, 1) }}</div>
            <h3 class="font-bold text-text-primary">{{ $m->name }}</h3>
            <p class="text-sm text-accent font-medium mb-2">{{ $m->title }}</p>
            <p class="text-sm text-text-secondary line-clamp-2 mb-4">{{ $m->bio }}</p>
            <div class="flex gap-2"><a href="{{ route('admin.team.edit', $m) }}" class="text-xs text-primary font-medium">Edit</a><form action="{{ route('admin.team.destroy', $m) }}" method="POST" onsubmit="return confirm('Remove?')">@csrf @method('DELETE')<button class="text-xs text-error font-medium">Remove</button></form></div>
        </div>
        @endforeach
    </div>
</x-admin-layout>
