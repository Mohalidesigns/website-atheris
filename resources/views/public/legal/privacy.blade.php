<x-app-layout metaTitle="Privacy Policy — Atheris Limited">
    <section class="bg-gradient-hero py-16"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl font-extrabold text-white">Privacy Policy</h1><p class="text-white/60 mt-2">Last updated: March 2026</p></div></section>
    <section class="py-16 bg-white"><div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 prose prose-lg max-w-none prose-headings:text-text-primary prose-p:text-text-secondary">
        @if(App\Models\Setting::get('page_privacy_content'))
            {!! App\Models\Setting::get('page_privacy_content') !!}
        @else
        <h2>1. Introduction</h2><p>Atheris Limited ("we", "our", "us") is committed to protecting your privacy in accordance with the Nigeria Data Protection Act 2023 (NDPA) and other applicable regulations.</p>
        <h2>2. Data Collection</h2><p>We collect information you provide directly, such as name, email, company, and role when you request a demo, download resources, or subscribe to our newsletter.</p>
        <h2>3. Data Residency</h2><p>All personal data is stored on AWS Lagos (af-south-1) region servers. No data is transferred outside Nigeria without explicit consent.</p>
        <h2>4. Data Usage</h2><p>Your data is used to provide requested services, communicate about our products, improve user experience, and comply with legal obligations.</p>
        <h2>5. Data Retention</h2><p>Lead data is retained for 24 months from last activity. You may request deletion at any time.</p>
        <h2>6. Your Rights</h2><p>Under NDPA 2023, you have the right to access, correct, delete, and port your personal data. Contact privacy@atherislimited.com to exercise these rights.</p>
        <h2>7. Contact</h2><p>Atheris Limited, Victoria Island, Lagos, Nigeria. Email: privacy@atherislimited.com</p>
        @endif
    </div></section>
</x-app-layout>
