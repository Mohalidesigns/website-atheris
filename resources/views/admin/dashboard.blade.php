<x-admin-layout title="Dashboard">
    {{-- Welcome Banner --}}
    <div class="bg-gradient-to-r from-primary to-primary-light rounded-xl p-6 mb-8 text-white relative overflow-hidden">
        <div class="absolute right-0 top-0 w-64 h-full opacity-10">
            <svg viewBox="0 0 200 200" class="w-full h-full"><path d="M50,10 L90,90 L10,90 Z" fill="currentColor" opacity="0.3"/><circle cx="150" cy="50" r="40" fill="currentColor" opacity="0.2"/><rect x="120" y="120" width="60" height="60" rx="10" fill="currentColor" opacity="0.2"/></svg>
        </div>
        <div class="relative">
            <h2 class="text-xl font-bold mb-1">Welcome back, {{ auth()->user()->name }}</h2>
            <p class="text-white/70 text-sm">Here's what's happening with your Atheris CMS today.</p>
        </div>
        <div class="relative flex flex-wrap gap-3 mt-4">
            <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white text-sm font-medium px-4 py-2 rounded-lg transition backdrop-blur-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                New Post
            </a>
            <a href="{{ route('admin.leads.index') }}" class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white text-sm font-medium px-4 py-2 rounded-lg transition backdrop-blur-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                View Leads
            </a>
            <a href="{{ route('admin.media.index') }}" class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white text-sm font-medium px-4 py-2 rounded-lg transition backdrop-blur-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Upload Media
            </a>
            <a href="/" target="_blank" class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white text-sm font-medium px-4 py-2 rounded-lg transition backdrop-blur-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                View Site
            </a>
        </div>
    </div>

    {{-- Stats Grid --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @foreach([
            ['label' => 'Total Posts', 'value' => $stats['total_posts'], 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z', 'color' => 'primary', 'trend' => '+2 this week'],
            ['label' => 'New Leads', 'value' => $stats['new_leads'], 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'color' => 'accent', 'trend' => 'Awaiting follow-up'],
            ['label' => 'Total Views', 'value' => number_format($stats['total_views']), 'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z', 'color' => 'info', 'trend' => 'All time'],
            ['label' => 'Total Leads', 'value' => $stats['total_leads'], 'icon' => 'M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'color' => 'secondary', 'trend' => 'Total captured'],
        ] as $stat)
        <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <span class="text-sm font-medium text-text-secondary">{{ $stat['label'] }}</span>
                <div class="w-10 h-10 bg-{{ $stat['color'] }}/10 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-{{ $stat['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $stat['icon'] }}"/></svg>
                </div>
            </div>
            <div class="text-3xl font-bold text-text-primary mb-1">{{ $stat['value'] }}</div>
            <div class="text-xs text-text-secondary">{{ $stat['trend'] }}</div>
        </div>
        @endforeach
    </div>

    <div class="grid lg:grid-cols-2 gap-8 mb-8">
        {{-- Recent Leads --}}
        <div class="bg-white rounded-xl border border-border">
            <div class="flex items-center justify-between p-6 border-b border-border">
                <h2 class="font-semibold text-text-primary">Recent Leads</h2>
                <a href="{{ route('admin.leads.index') }}" class="text-sm text-primary hover:text-accent transition">View All</a>
            </div>
            <div class="divide-y divide-border">
                @forelse($recentLeads->take(5) as $lead)
                <div class="p-4 flex items-center justify-between">
                    <div>
                        <div class="font-medium text-sm">{{ $lead->first_name }} {{ $lead->last_name }}</div>
                        <div class="text-xs text-text-secondary">{{ $lead->email }} &middot; {{ $lead->company }}</div>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-full {{ $lead->status === 'new' ? 'bg-accent/10 text-accent' : 'bg-gray-100 text-text-secondary' }}">{{ ucfirst($lead->status) }}</span>
                </div>
                @empty
                <div class="p-6 text-center text-text-secondary text-sm">No leads yet. They'll appear here once demo requests come in.</div>
                @endforelse
            </div>
        </div>

        {{-- Recent Posts --}}
        <div class="bg-white rounded-xl border border-border">
            <div class="flex items-center justify-between p-6 border-b border-border">
                <h2 class="font-semibold text-text-primary">Recent Posts</h2>
                <a href="{{ route('admin.posts.index') }}" class="text-sm text-primary hover:text-accent transition">View All</a>
            </div>
            <div class="divide-y divide-border">
                @forelse($recentPosts as $post)
                <div class="p-4 flex items-center justify-between">
                    <div>
                        <div class="font-medium text-sm">{{ Str::limit($post->title, 40) }}</div>
                        <div class="text-xs text-text-secondary">{{ $post->author?->name }} &middot; {{ $post->created_at->format('M d') }}</div>
                    </div>
                    <span class="text-xs px-2 py-1 rounded-full {{ $post->status === 'published' ? 'bg-secondary/10 text-secondary' : 'bg-gray-100 text-text-secondary' }}">{{ ucfirst($post->status) }}</span>
                </div>
                @empty
                <div class="p-6 text-center text-text-secondary text-sm">No posts yet.</div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Content & SEO Overview --}}
    <div class="grid lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl border border-border p-6">
            <h3 class="font-semibold text-text-primary mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                Platform Status
            </h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Solutions</span><span class="font-semibold text-secondary">{{ App\Models\Solution::count() }} Active</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Team Members</span><span class="font-semibold">{{ App\Models\TeamMember::count() }}</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Media Files</span><span class="font-semibold">{{ App\Models\Media::count() }}</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Categories</span><span class="font-semibold">{{ App\Models\Category::count() }}</span></div>
            </div>
        </div>
        <div class="bg-white rounded-xl border border-border p-6">
            <h3 class="font-semibold text-text-primary mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                Quick Stats
            </h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Published Posts</span><span class="font-semibold">{{ App\Models\Post::where('status','published')->count() }}</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Draft Posts</span><span class="font-semibold text-warning">{{ App\Models\Post::where('status','draft')->count() }}</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Testimonials</span><span class="font-semibold">{{ App\Models\Testimonial::count() }}</span></div>
                <div class="flex justify-between items-center text-sm"><span class="text-text-secondary">Partners</span><span class="font-semibold">{{ App\Models\Partner::count() }}</span></div>
            </div>
        </div>
        <div class="bg-white rounded-xl border border-border p-6">
            <h3 class="font-semibold text-text-primary mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-info" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                Quick Links
            </h3>
            <div class="space-y-2">
                <a href="/sitemap.xml" target="_blank" class="flex items-center gap-2 text-sm text-text-secondary hover:text-primary transition p-2 rounded-lg hover:bg-bg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    View Sitemap
                </a>
                <a href="/" target="_blank" class="flex items-center gap-2 text-sm text-text-secondary hover:text-primary transition p-2 rounded-lg hover:bg-bg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    View Website
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-2 text-sm text-text-secondary hover:text-primary transition p-2 rounded-lg hover:bg-bg">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Site Settings
                </a>
            </div>
        </div>
    </div>
</x-admin-layout>
