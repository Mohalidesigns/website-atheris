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
    // Grouping-only segments with no landing page — omitted from the trail entirely
    // (a breadcrumb item without a real URL fails Google's BreadcrumbList validation).
    $__noHub = ['solutions', 'industries', 'resources', 'legal', 'category'];

    $__crumbs = [];
    if ($__path !== '' && $__path !== '/') {
        $__segments = explode('/', $__path);
        $__acc = '';
        foreach ($__segments as $__seg) {
            $__acc .= '/' . $__seg;
            if (in_array($__seg, $__noHub)) {
                continue; // keep accumulating the path, but don't render this crumb
            }
            $__label = $__labels[$__seg] ?? ucwords(str_replace('-', ' ', $__seg));
            $__crumbs[] = ['label' => $__label, 'url' => url($__acc)];
        }
    }
    $__lastIndex = count($__crumbs) - 1;
@endphp
@if(!empty($__crumbs))
<nav aria-label="Breadcrumb" class="bg-bg border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <ol class="flex flex-wrap items-center gap-2 text-sm text-text-secondary">
            <li><a href="{{ url('/') }}" class="hover:text-primary transition">Home</a></li>
            @foreach($__crumbs as $__i => $__c)
                <li aria-hidden="true" class="text-border">/</li>
                <li>
                    @if($__i === $__lastIndex)
                        <span class="text-text-primary font-medium" aria-current="page">{{ $__c['label'] }}</span>
                    @else
                        <a href="{{ $__c['url'] }}" class="hover:text-primary transition">{{ $__c['label'] }}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
@php
    // Every ListItem carries an item URL (required by Google for non-final items;
    // valid on the final item too), so the trail passes Rich Results validation.
    $__items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')]];
    $__pos = 2;
    foreach ($__crumbs as $__c) {
        $__items[] = ['@type' => 'ListItem', 'position' => $__pos, 'name' => $__c['label'], 'item' => $__c['url']];
        $__pos++;
    }
    $__bcLd = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $__items];
@endphp
<script type="application/ld+json">{!! json_encode($__bcLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif
