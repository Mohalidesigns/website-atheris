<x-admin-layout title="Add Team Member">
    <div class="max-w-2xl"><a href="{{ route('admin.team.index') }}" class="text-sm text-text-secondary hover:text-primary mb-4 inline-block">&larr; Back</a>
        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl border border-border p-6 space-y-5">@csrf
            <div><label class="block text-sm font-medium mb-1.5">Name *</label><input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"></div>
            <div><label class="block text-sm font-medium mb-1.5">Title *</label><input type="text" name="title" required class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"></div>
            <div><label class="block text-sm font-medium mb-1.5">Bio</label><textarea name="bio" rows="3" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm resize-none"></textarea></div>
            <div><label class="block text-sm font-medium mb-1.5">Photo</label><input type="file" name="photo" accept="image/*" class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary"></div>
            <div><label class="block text-sm font-medium mb-1.5">LinkedIn</label><input type="url" name="linkedin" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"></div>
            <div><label class="block text-sm font-medium mb-1.5">Sort Order</label><input type="number" name="sort_order" value="0" class="w-full px-4 py-3 rounded-lg border border-border outline-none text-sm"></div>
            <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Add Member</button>
        </form>
    </div>
</x-admin-layout>
