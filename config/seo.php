<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Organisation / entity data
    |--------------------------------------------------------------------------
    | Single source of truth for sitewide structured data (JSON-LD), the
    | Organization/WebSite graph, and future OG/schema needs. Keep facts
    | verifiable — anything marked [TODO] must be confirmed before it is
    | asserted publicly.
    */

    'organization' => [
        'name'        => 'Atheris Limited',
        'url'         => 'https://atherislimited.com',
        'logo'        => 'https://atherislimited.com/images/brand/header-logo.png',
        'email'             => 'info@atherislimited.com',
        'telephone'         => '+2348035935802',        // E.164 (tel: href)
        'telephone_display' => '+234 803 593 5802',      // human-readable (NAP)
        'locality'          => 'Lagos',
        'region'            => 'Lagos',
        'country'           => 'NG',
        'address_display'   => 'Lagos, Nigeria',         // [TODO: confirm full street address]
        // Factual, non-superlative description (see docs/seo/08-claims-register.md).
        'description' => 'Atheris is a Nigerian governance, risk and compliance (GRC) platform purpose-built for CBN, BOFIA 2020 and NDPA 2023 compliance for African financial institutions.',
        // 'foundingDate' => null, // [TODO: confirm year]
        // 'streetAddress' => null, // [TODO: confirm registered address]
        'sameAs'      => [
            'https://www.linkedin.com/company/atheris-limitedng',
            'https://x.com/atherislimited',
            'https://www.facebook.com/atherislimited',
            'https://www.instagram.com/atheris.limited',
        ],
    ],

    'locale' => 'en-NG',

];
