<x-app-layout :metaTitle="$post->meta_title ?? $post->title . ' — Atheris Blog'" :metaDescription="$post->meta_description ?? $post->excerpt">
    <article class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-sm text-text-secondary mb-8">
                <a href="/" class="hover:text-primary transition">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="/resources/blog" class="hover:text-primary transition">Blog</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-text-primary">{{ Str::limit($post->title, 40) }}</span>
            </nav>

            {{-- Header --}}
            @if($post->category)
            <span class="inline-block bg-primary/10 text-primary text-sm font-semibold px-3 py-1 rounded-full mb-4">{{ $post->category->name }}</span>
            @endif
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-text-primary mb-6 leading-tight">{{ $post->title }}</h1>

            <div class="flex items-center gap-6 text-sm text-text-secondary mb-10 pb-10 border-b border-border">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary font-bold">{{ substr($post->author?->name ?? 'A', 0, 1) }}</div>
                    <span class="font-medium text-text-primary">{{ $post->author?->name ?? 'Atheris Team' }}</span>
                </div>
                <span>{{ $post->published_at?->format('M d, Y') }}</span>
                <span>{{ $post->reading_time }} min read</span>
                <span>{{ number_format($post->view_count) }} views</span>
            </div>

            {{-- Featured Image --}}
            <div class="aspect-[16/9] bg-gradient-to-br from-primary/5 to-info/5 rounded-2xl mb-12 overflow-hidden flex items-center justify-center border border-border">
                @if($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                @else
                    <div class="text-text-secondary/30 text-center"><svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg><p class="text-sm font-medium">Featured Image</p><p class="text-xs mt-1">1200 x 675px</p></div>
                @endif
            </div>

            {{-- Content --}}
            <div class="prose prose-lg max-w-none prose-headings:text-text-primary prose-p:text-text-secondary prose-a:text-primary prose-strong:text-text-primary">
                {!! $post->body !!}
            </div>

            {{-- Tags --}}
            @if($post->tags)
            <div class="flex flex-wrap gap-2 mt-10 pt-10 border-t border-border">
                @foreach($post->tags as $tag)
                <span class="bg-bg text-text-secondary text-sm px-3 py-1 rounded-full border border-border">#{{ $tag }}</span>
                @endforeach
            </div>
            @endif
        </div>
    </article>

    {{-- Related Posts --}}
    @if($relatedPosts->count() > 0)
    <section class="py-16 bg-bg border-t border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-text-primary mb-8">Related Articles</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedPosts as $related)
                <a href="/resources/blog/{{ $related->slug }}" class="group bg-white rounded-xl overflow-hidden border border-border hover:shadow-lg transition">
                    <div class="aspect-[16/9] bg-gradient-to-br from-primary/5 to-info/5 flex items-center justify-center text-text-secondary/30"><span class="text-xs">800 x 450px</span></div>
                    <div class="p-5">
                        <h3 class="font-bold text-text-primary group-hover:text-primary transition line-clamp-2">{{ $related->title }}</h3>
                        <p class="text-sm text-text-secondary mt-2">{{ $related->published_at?->format('M d, Y') }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</x-app-layout>
