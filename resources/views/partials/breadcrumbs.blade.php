@php
    $__path = trim(request()->path(), '/');

    $__labels = [
        'platform' => 'Platform', 'ai-intelligence' => 'AI Intelligence',
        'security' => 'Security & Trust', 'integrations' => 'Integrations',
        'third-party-risk' => 'Third Party Risk',
        'solutions' => 'Solutions', 'industries' => 'Industries',
        'why-atheris' => 'Why Atheris', 'roi-calculator' => 'ROI Calculator',
        'resources' => 'Resources', 'blog' => 'Blog', 'category' => 'Category',
        'whitepapers' => 'Whitepapers', 'cbn-hub' => 'CBN Hub',
        'legal' => 'Legal', 'privacy' => 'Privacy Policy', 'terms' => 'Terms of Service',
        'demo' => 'Request a Demo', 'contact' => 'Contact', 'about' => 'About',
        'careers' => 'Careers', 'partners' => 'Partners', 'customers' => 'Customers',
        'software-solutions' => 'Products',
        'audit-management' => 'Internal Audit Management',
        'enterprise-risk-management' => 'Enterprise Risk Management',
        'controls-management' => 'Internal Control Management',
        'compliance-management' => 'Compliance Management',
        'esg-management' => 'ESG Management',
        'banks' => 'Commercial Banks', 'microfinance' => 'Microfinance Banks',
        'insurance' => 'Insurance Companies', 'capital-markets' => 'Capital Markets',
    ];
    // Segments that are grouping-only and have no landing page of their own.
    $__noHub = ['solutions', 'industries', 'resources', 'legal', 'category'];

    $__crumbs = [];
    if ($__path !== '' && $__path !== '/') {
        $__segments = explode('/', $__path);
        $__acc = '';
        $__count = count($__segments);
        foreach ($__segments as $__i => $__seg) {
            $__acc .= '/' . $__seg;
            $__isLast = ($__i === $__count - 1);
            $__label = $__labels[$__seg] ?? ucwords(str_replace('-', ' ', $__seg));
            $__url = (!$__isLast && !in_array($__seg, $__noHub)) ? url($__acc) : null;
            $__crumbs[] = ['label' => $__label, 'url' => $__url];
        }
    }
@endphp
@if(!empty($__crumbs))
<nav aria-label="Breadcrumb" class="bg-bg border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <ol class="flex flex-wrap items-center gap-2 text-sm text-text-secondary">
            <li><a href="{{ url('/') }}" class="hover:text-primary transition">Home</a></li>
            @foreach($__crumbs as $__c)
                <li aria-hidden="true" class="text-border">/</li>
                <li>
                    @if($__c['url'])
                        <a href="{{ $__c['url'] }}" class="hover:text-primary transition">{{ $__c['label'] }}</a>
                    @else
                        <span class="text-text-primary font-medium" aria-current="page">{{ $__c['label'] }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@php
    $__items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')]];
    $__pos = 2;
    foreach ($__crumbs as $__c) {
        $__li = ['@type' => 'ListItem', 'position' => $__pos, 'name' => $__c['label']];
        if ($__c['url']) { $__li['item'] = $__c['url']; }
        $__items[] = $__li;
        $__pos++;
    }
    $__bcLd = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $__items];
@endphp
<script type="application/ld+json">{!! json_encode($__bcLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif
