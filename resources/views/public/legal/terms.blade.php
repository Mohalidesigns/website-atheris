<x-app-layout metaTitle="Terms of Service — Atheris Limited">
    <section class="bg-gradient-hero py-16"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl font-extrabold text-white">Terms of Service</h1><p class="text-white/60 mt-2">Last updated: March 2026</p></div></section>
    <section class="py-16 bg-white"><div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 prose prose-lg max-w-none prose-headings:text-text-primary prose-p:text-text-secondary">
        @if(App\Models\Setting::get('page_terms_content'))
            {!! App\Models\Setting::get('page_terms_content') !!}
        @else
        <h2>1. Acceptance</h2><p>By accessing the Atheris website, you agree to these terms. If you do not agree, please do not use our website.</p>
        <h2>2. Services</h2><p>Atheris provides a cloud-based GRC platform for financial institutions. Service availability and features vary by subscription plan.</p>
        <h2>3. User Accounts</h2><p>Users are responsible for maintaining account security. Shared accounts are not permitted.</p>
        <h2>4. Intellectual Property</h2><p>All content, software, and materials on this website are owned by Atheris Limited and protected by Nigerian and international copyright law.</p>
        <h2>5. Limitation of Liability</h2><p>Atheris shall not be liable for indirect, incidental, or consequential damages arising from use of our services.</p>
        <h2>6. Governing Law</h2><p>These terms are governed by the laws of the Federal Republic of Nigeria.</p>
        <h2>7. Contact</h2><p>Atheris Limited, Victoria Island, Lagos, Nigeria. Email: legal@atherislimited.com</p>
        @endif
    </div></section>
</x-app-layout>
