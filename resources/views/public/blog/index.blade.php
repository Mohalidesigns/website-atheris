<x-app-layout metaTitle="{{ isset($category) ? $category->name . ' — Atheris Blog' : 'Blog — Atheris GRC' }}">
    <section class="bg-gradient-hero py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-white mb-4">{{ isset($category) ? $category->name : 'Insights & Resources' }}</h1>
            <p class="text-lg text-white/70">Expert perspectives on GRC, Nigerian compliance, and risk management.</p>
        </div>
    </section>

    <section class="py-16 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Categories --}}
            <div class="flex flex-wrap gap-2 mb-12 justify-center">
                <a href="/resources/blog" class="px-4 py-2 rounded-full text-sm font-medium transition {{ !isset($category) ? 'bg-primary text-white' : 'bg-white text-text-secondary border border-border hover:border-primary' }}">All</a>
                @foreach($categories as $cat)
                <a href="/resources/blog/category/{{ $cat->slug }}" class="px-4 py-2 rounded-full text-sm font-medium transition {{ isset($category) && $category->id === $cat->id ? 'bg-primary text-white' : 'bg-white text-text-secondary border border-border hover:border-primary' }}">{{ $cat->name }} ({{ $cat->posts_count }})</a>
                @endforeach
            </div>

            {{-- Posts Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                <a href="/resources/blog/{{ $post->slug }}" class="group bg-white rounded-2xl overflow-hidden border border-border hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="aspect-[16/9] bg-gradient-to-br from-primary/5 to-info/5 relative flex items-center justify-center">
                        @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="text-text-secondary/30 text-center"><svg class="w-10 h-10 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><span class="text-xs">800 x 450px</span></div>
                        @endif
                        @if($post->category)
                        <span class="absolute top-4 left-4 bg-primary/90 text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $post->category->name }}</span>
                        @endif
                    </div>
                    <div class="p-6">
                        <h2 class="text-lg font-bold text-text-primary mb-2 group-hover:text-primary transition line-clamp-2">{{ $post->title }}</h2>
                        <p class="text-sm text-text-secondary mb-4 line-clamp-2">{{ $post->excerpt }}</p>
                        <div class="flex items-center justify-between text-xs text-text-secondary">
                            <span>{{ $post->published_at?->format('M d, Y') }}</span>
                            <span>{{ $post->reading_time }} min read</span>
                        </div>
                    </div>
                </a>
                @empty
                <div class="col-span-3 text-center py-16 text-text-secondary">
                    <p class="text-lg">No posts found.</p>
                </div>
                @endforelse
            </div>

            <div class="mt-12">{{ $posts->links() }}</div>
        </div>
    </section>
</x-app-layout>
