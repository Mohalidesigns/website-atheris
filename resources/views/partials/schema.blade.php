@php
    $org    = config('seo.organization');
    $orgId  = $org['url'] . '/#organization';
    $siteId = $org['url'] . '/#website';

    $organization = [
        '@type'       => 'Organization',
        '@id'         => $orgId,
        'name'        => $org['name'],
        'url'         => $org['url'],
        'logo'        => $org['logo'],
        'image'       => $org['logo'],
        'email'       => $org['email'],
        'telephone'   => $org['telephone'],
        'description' => $org['description'],
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => $org['locality'],
            'addressCountry'  => $org['country'],
        ],
        'areaServed'  => ['@type' => 'Country', 'name' => 'Nigeria'],
        'sameAs'      => array_values($org['sameAs']),
    ];
    if (!empty($org['foundingDate'])) {
        $organization['foundingDate'] = $org['foundingDate'];
    }

    $website = [
        '@type'      => 'WebSite',
        '@id'        => $siteId,
        'url'        => $org['url'],
        'name'       => $org['name'],
        'publisher'  => ['@id' => $orgId],
        'inLanguage' => config('seo.locale', 'en-NG'),
    ];

    $graph = [
        '@context' => 'https://schema.org',
        '@graph'   => [$organization, $website],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
