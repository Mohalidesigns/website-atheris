@php
    $org = config('seo.organization');
    $lb = [
        '@context'           => 'https://schema.org',
        '@type'              => 'ProfessionalService',
        '@id'                => $org['url'] . '/contact#localbusiness',
        'name'               => $org['name'],
        'url'                => url('/contact'),
        'image'              => $org['logo'],
        'telephone'          => $org['telephone'],
        'email'              => $org['email'],
        'address'            => [
            '@type'           => 'PostalAddress',
            'addressLocality' => $org['locality'],
            'addressRegion'   => $org['region'],
            'addressCountry'  => $org['country'],
        ],
        'areaServed'         => ['@type' => 'Country', 'name' => 'Nigeria'],
        'parentOrganization' => ['@id' => $org['url'] . '/#organization'],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($lb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
