@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc>{{ url('/') }}</loc><changefreq>daily</changefreq><priority>1.0</priority></url>
    <url><loc>{{ url('/platform') }}</loc><changefreq>weekly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/platform/ai-intelligence') }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/platform/security') }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/platform/integrations') }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/demo') }}</loc><changefreq>monthly</changefreq><priority>0.9</priority></url>
    <url><loc>{{ url('/about') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/careers') }}</loc><changefreq>weekly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/partners') }}</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>
    <url><loc>{{ url('/customers') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/resources/blog') }}</loc><changefreq>daily</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/resources/whitepapers') }}</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/resources/cbn-hub') }}</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/why-atheris/vs-diligent') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/why-atheris/vs-archer') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/why-atheris/roi-calculator') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/banks') }}</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/industries/microfinance') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/insurance') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/industries/capital-markets') }}</loc><changefreq>monthly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/software-solutions') }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    <url><loc>{{ url('/software-solutions/visitors-management') }}</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/software-solutions/poultry-management') }}</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/software-solutions/career-portal') }}</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>
    <url><loc>{{ url('/legal/privacy') }}</loc><changefreq>yearly</changefreq><priority>0.3</priority></url>
    <url><loc>{{ url('/legal/terms') }}</loc><changefreq>yearly</changefreq><priority>0.3</priority></url>
    @foreach($solutions as $solution)
    <url><loc>{{ url('/solutions/' . $solution->slug) }}</loc><changefreq>weekly</changefreq><priority>0.8</priority></url>
    @endforeach
    @foreach($posts as $post)
    <url><loc>{{ url('/resources/blog/' . $post->slug) }}</loc><lastmod>{{ $post->updated_at->toW3cString() }}</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
    @endforeach
</urlset>
