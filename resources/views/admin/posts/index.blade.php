<x-admin-layout title="Blog Posts">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold">Blog Posts</h2>
        <a href="{{ route('admin.posts.create') }}" class="bg-primary hover:bg-primary-light text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition">+ New Post</a>
    </div>

    <div class="bg-white rounded-xl border border-border overflow-hidden">
        <table class="w-full">
            <thead><tr class="bg-gray-50 border-b border-border text-left">
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Title</th>
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Category</th>
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Status</th>
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Views</th>
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Date</th>
                <th class="p-4 text-xs font-semibold text-text-secondary uppercase">Actions</th>
            </tr></thead>
            <tbody class="divide-y divide-border">
                @forelse($posts as $post)
                <tr class="hover:bg-gray-50">
                    <td class="p-4"><div class="font-medium text-sm text-text-primary">{{ Str::limit($post->title, 50) }}</div></td>
                    <td class="p-4 text-sm text-text-secondary">{{ $post->category?->name ?? '—' }}</td>
                    <td class="p-4"><span class="text-xs px-2 py-1 rounded-full {{ $post->status === 'published' ? 'bg-secondary/10 text-secondary' : 'bg-gray-100 text-text-secondary' }}">{{ ucfirst($post->status) }}</span></td>
                    <td class="p-4 text-sm text-text-secondary">{{ number_format($post->view_count) }}</td>
                    <td class="p-4 text-sm text-text-secondary">{{ $post->created_at->format('M d, Y') }}</td>
                    <td class="p-4"><div class="flex gap-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="text-xs text-primary hover:text-accent font-medium">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">@csrf @method('DELETE') <button class="text-xs text-error font-medium">Delete</button></form>
                    </div></td>
                </tr>
                @empty
                <tr><td colspan="6" class="p-8 text-center text-text-secondary">No posts found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $posts->links() }}</div>
</x-admin-layout>
