@props([
    'metaTitle' => null,
    'metaDescription' => null,
    'ogImage' => null,
    'canonical' => null,
    'ogType' => null,
    'noindex' => false,
])
<!DOCTYPE html>
<html lang="en-NG" class="scroll-smooth">
<head>
    {{-- GTM (GTM-59B4JQCC) hosts GA4 and other tags. The Meta Pixel is hard-coded
         below (consent-gated) — do NOT also add the Pixel to the GTM container, or
         it will double-fire. Page/lead events are also pushed to dataLayer for GTM. --}}
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-59B4JQCC');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="BSAzXuk2ml-2K-9ACNiNnhLNO_TQldxpHYgO2RHO7Sg">

    {{-- Meta Pixel — consent-gated. Library loads but nothing is sent until the
         visitor grants marketing consent ("Accept All" in the cookie banner).
         "Essential Only" keeps it revoked. Pixel lives here only, NOT in GTM. --}}
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('consent', 'revoke');
    fbq('init', '1115892094345456');
    // Grant BEFORE tracking so returning visitors who already accepted send
    // normally; new / "Essential Only" visitors stay revoked (PageView held).
    try { if (localStorage.getItem('cookie_consent') === 'all') { fbq('consent', 'grant'); } } catch (e) {}
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1115892094345456&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    @php
        $__title     = $metaTitle ?? "Atheris Limited — Africa's AI-First GRC Platform";
        $__desc      = $metaDescription ?? "Africa's only AI-first Governance, Risk & Compliance platform with native CBN, BOFIA, and NDPA compliance — purpose-built for Nigerian financial institutions.";
        $__canonical = $canonical ?? url()->current();
        $__ogImage   = $ogImage ?? asset('images/placeholders/og-default.jpg');
        $__noindex   = ($noindex ?? false);
    @endphp
    <title>{{ $__title }}</title>
    <meta name="description" content="{{ $__desc }}">
    <link rel="canonical" href="{{ $__canonical }}">
    <link rel="alternate" hreflang="en-NG" href="{{ $__canonical }}">
    <link rel="alternate" hreflang="x-default" href="{{ $__canonical }}">
    @if($__noindex)
    <meta name="robots" content="noindex,nofollow">
    @else
    <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    @endif
    <meta name="theme-color" content="#0B1F3A">
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:site_name" content="Atheris Limited">
    <meta property="og:title" content="{{ $__title }}">
    <meta property="og:description" content="{{ $__desc }}">
    <meta property="og:url" content="{{ $__canonical }}">
    <meta property="og:image" content="{{ $__ogImage }}">
    <meta property="og:image:alt" content="{{ $__title }}">
    <meta property="og:locale" content="en_NG">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $__title }}">
    <meta name="twitter:description" content="{{ $__desc }}">
    <meta name="twitter:image" content="{{ $__ogImage }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=2" sizes="any">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=2">
    {{-- Self-hosted Fedra Sans: preload the two cuts used above the fold --}}
    <link rel="preload" as="font" type="font/woff2" crossorigin
          href="{{ asset('fonts/fedra-sans/FedraSansStd-BookLF.woff2') }}">
    <link rel="preload" as="font" type="font/woff2" crossorigin
          href="{{ asset('fonts/fedra-sans/FedraSansStd-MediumLF.woff2') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&amp;display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- GA4, GTM and the Meta Pixel are managed in the GTM container (see top of
         head). The old Setting-driven gtag/gtm/pixel injectors were removed to
         guarantee a single tracking source and avoid double-firing. --}}

    {{-- Structured data: sitewide Organization + WebSite entity graph (G6) --}}
    @include('partials.schema')

    {{-- Custom Head Scripts --}}
    {!! App\Models\Setting::get('custom_head_scripts', '') !!}

    @stack('head')
</head>
<body class="antialiased bg-bg text-text-primary" x-data="{ showBackToTop: false }" @scroll.window="showBackToTop = window.scrollY > 500">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59B4JQCC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- Custom Body Scripts --}}
    {!! App\Models\Setting::get('custom_body_scripts', '') !!}

    {{-- Announcement Bar --}}
    @if(App\Models\Setting::get('homepage_announcement_text'))
    <div class="bg-primary text-white text-center text-sm py-2 px-4" x-data="{ show: true }" x-show="show">
        <div class="max-w-7xl mx-auto flex items-center justify-center gap-2">
            <span class="inline-block w-2 h-2 bg-accent rounded-full animate-pulse"></span>
            <span>{{ App\Models\Setting::get('homepage_announcement_text', 'New: AI-Powered Regulatory Change Monitor now live.') }}</span>
            <a href="{{ App\Models\Setting::get('homepage_announcement_link', '/demo') }}" class="underline font-semibold hover:text-accent transition">Learn More &rarr;</a>
            <button @click="show = false" class="ml-4 text-white/60 hover:text-white">&times;</button>
        </div>
    </div>
    @endif

    {{-- Navigation --}}
    @include('partials.navigation')

    {{-- Breadcrumbs (auto-derived from path; hidden on homepage) + BreadcrumbList schema --}}
    @include('partials.breadcrumbs')

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Back to Top --}}
    <button
        x-show="showBackToTop"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-8 right-8 z-50 bg-primary text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-primary-light transition-all hover:shadow-xl"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    {{-- Cookie Consent Banner --}}
    <div x-data="{ show: !localStorage.getItem('cookie_consent') }" x-show="show" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="fixed bottom-0 left-0 right-0 z-50 p-4" x-cloak>
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-2xl border border-border p-6 flex flex-col sm:flex-row items-center gap-4">
            <div class="flex items-center gap-3 flex-1">
                <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <p class="text-sm text-text-secondary">We use cookies to improve your experience. By continuing, you agree to our <a href="/legal/privacy" class="text-primary font-semibold underline hover:text-accent">Privacy Policy</a>. Data is stored in Nigeria per NDPA 2023.</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <button @click="show = false; localStorage.setItem('cookie_consent', 'essential')" class="text-sm font-medium text-text-secondary hover:text-primary px-4 py-2 rounded-lg border border-border hover:border-primary transition">Essential Only</button>
                <button @click="show = false; localStorage.setItem('cookie_consent', 'all'); if (window.fbq) fbq('consent', 'grant')" class="text-sm font-semibold text-white bg-primary hover:bg-primary-light px-6 py-2 rounded-lg transition shadow-sm">Accept All</button>
            </div>
        </div>
    </div>

    {{-- Image Lightbox Modal --}}
    <div x-data="imageLightbox()" x-on:open-lightbox.window="open($event.detail)" x-show="visible" x-cloak
         class="fixed inset-0 z-[100] flex items-center justify-center p-4"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" @click="close()"></div>
        <div class="relative max-w-6xl w-full max-h-[90vh]"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100">
            <button @click="close()" class="absolute -top-12 right-0 text-white/80 hover:text-white flex items-center gap-2 text-sm font-medium transition">
                Close
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <img :src="src" :alt="alt" class="w-full h-auto max-h-[85vh] object-contain rounded-xl shadow-2xl">
        </div>
    </div>
    <script>
        function imageLightbox() {
            return {
                visible: false,
                src: '',
                alt: '',
                open(detail) { this.src = detail.src; this.alt = detail.alt || ''; this.visible = true; document.body.style.overflow = 'hidden'; },
                close() { this.visible = false; document.body.style.overflow = ''; }
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
