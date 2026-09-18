<x-app-layout metaTitle="Contact Us — Atheris GRC" metaDescription="Get in touch with the Atheris team. We'll respond to your governance, risk, and compliance enquiry shortly.">
    <section class="bg-gradient-hero py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{!! App\Models\Setting::get('page_contact_hero_title', 'Get in <span class="text-accent">Touch</span>') !!}</h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto">{{ App\Models\Setting::get('page_contact_hero_subtitle', "Questions about the platform, pricing, or partnerships? Send us a message and our team will respond shortly.") }}</p>
        </div>
    </section>

    <section class="py-20 bg-bg">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-5 gap-10">
            {{-- Contact info --}}
            <div class="lg:col-span-2 space-y-8">
                <div>
                    <h2 class="text-xl font-bold text-text-primary mb-2">Talk to us</h2>
                    <p class="text-sm text-text-secondary">We typically respond within one business day.</p>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                        <div>
                            <p class="text-sm font-semibold text-text-primary">Email</p>
                            <a href="mailto:info@atherislimited.com" class="text-sm text-text-secondary hover:text-primary transition">info@atherislimited.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                        <div>
                            <p class="text-sm font-semibold text-text-primary">Office</p>
                            <p class="text-sm text-text-secondary">Lagos, Nigeria</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact form --}}
            <div class="lg:col-span-3">
                <div class="bg-white rounded-2xl border border-border shadow-sm p-8">
                    @if(session('success'))
                    <div class="bg-secondary/10 text-secondary p-4 rounded-xl mb-6 font-medium">{{ session('success') }}</div>
                    @endif

                    @if(session('lead_form_type') === 'contact')
                    {{-- Conversion tracking: fires once on a successful contact submission --}}
                    <script>
                        if (typeof fbq === 'function') fbq('track', 'Lead');
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({ event: 'generate_lead', form_type: 'contact' });
                    </script>
                    @endif

                    @if($errors->any())
                    <div class="bg-error/10 text-error p-4 rounded-xl mb-6 text-sm">Please check the form and try again.</div>
                    @endif

                    <form action="/leads" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="form_type" value="contact">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-1.5">First Name *</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-1.5">Last Name *</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Work Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="john@institution.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Company</label>
                            <input type="text" name="company" value="{{ old('company') }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Your Institution">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Phone</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="+234 ...">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Message *</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none" placeholder="How can we help?">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="w-full bg-accent hover:bg-accent-light text-white font-bold py-4 rounded-xl transition-all shadow-lg text-base">Send Message</button>
                        <p class="text-xs text-text-secondary text-center">By submitting, you agree to our <a href="/legal/privacy" class="underline">Privacy Policy</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
