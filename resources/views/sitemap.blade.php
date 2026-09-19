@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
@php $lm = config('seo.content_updated', date('Y-m-d')); @endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url><loc>{{ url('/') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>daily</changefreq><priority>1.0</priority></url>
    <url><loc>{{ url('/platform') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/solutions') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/platform/ai-intelligence') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/platform/security') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/platform/integrations') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/why-atheris') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/why-atheris/roi-calculator') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/demo') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/contact') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/about') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/careers') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/partners') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/customers') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/banks') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/industries/microfinance') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/insurance') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/capital-markets') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/resources/blog') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/resources/whitepapers') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/resources/cbn-hub') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
    @if(App\Models\Setting::get('products_page_enabled'))
    <url><loc>{{ url('/software-solutions') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/software-solutions/visitors-management') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/software-solutions/poultry-management') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/software-solutions/career-portal') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
    @endif
    <url><loc>{{ url('/legal/privacy') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>yearly</changefreq><priority>0.3</priority></url>
    <url><loc>{{ url('/legal/terms') }}</loc><lastmod>{{ $lm }}</lastmod><changefreq>yearly</changefreq><priority>0.3</priority></url>
    @foreach($solutions as $solution)
    <url><loc>{{ url('/solutions/' . $solution->slug) }}</loc><lastmod>{{ optional($solution->updated_at)->toW3cString() ?? $lm }}</lastmod><changefreq>weekly</changefreq><priority>0.8</priority>@if($solution->hero_image)<image:image><image:loc>{{ url('storage/' . $solution->hero_image) }}</image:loc></image:image>@endif</url>
    @endforeach
    @foreach($posts as $post)
    <url><loc>{{ url('/resources/blog/' . $post->slug) }}</loc><lastmod>{{ $post->updated_at->toW3cString() }}</lastmod><changefreq>monthly</changefreq><priority>0.6</priority>@if($post->featured_image)<image:image><image:loc>{{ url('storage/' . $post->featured_image) }}</image:loc></image:image>@endif</url>
    @endforeach
</urlset>
