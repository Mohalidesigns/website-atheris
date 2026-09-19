@php
    /** Renders SoftwareApplication JSON-LD for a solution page. Expects $solution. */
    $__s = $solution ?? null;
    $__sw = null;
    if ($__s) {
        $__features = collect($__s->features ?? [])
            ->map(fn ($f) => is_array($f) ? ($f['title'] ?? $f['name'] ?? null) : $f)
            ->filter()
            ->values()
            ->all();

        $__url = url('/solutions/' . $__s->slug);
        $__sw = [
            '@context'            => 'https://schema.org',
            '@type'               => 'SoftwareApplication',
            '@id'                 => $__url . '#software',
            'name'                => $__s->title . ' — Atheris',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem'     => 'Web-based',
            'url'                 => $__url,
            'description'         => $__s->meta_description ?: ($__s->tagline ?: $__s->description),
            'provider'            => ['@id' => config('seo.organization.url') . '/#organization'],
            'publisher'           => ['@id' => config('seo.organization.url') . '/#organization'],
        ];
        if (!empty($__features)) {
            $__sw['featureList'] = $__features;
        }
    }
@endphp
@if($__sw)
<script type="application/ld+json">{!! json_encode($__sw, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif
