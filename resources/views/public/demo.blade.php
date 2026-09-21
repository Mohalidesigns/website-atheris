<x-app-layout metaTitle="Request a Demo — Atheris GRC">
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                {{-- Left Content --}}
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">{{ App\Models\Setting::get('page_demo_hero_title', 'See Atheris in Action') }}</h1>
                    <p class="text-lg text-white/70 mb-10 leading-relaxed">{{ App\Models\Setting::get('page_demo_hero_subtitle', "Book a personalized 30-minute demo with our team. We'll walk you through the modules relevant to your role using real Nigerian banking scenarios.") }}</p>

                    <div class="space-y-6 mb-10">
                        @foreach([
                            ['icon' => 'clock', 'title' => '30-Minute Demo', 'desc' => 'Focused walkthrough tailored to your role and institution type.'],
                            ['icon' => 'users', 'title' => 'Meet the Team', 'desc' => 'Speak directly with our GRC experts who understand Nigerian banking.'],
                            ['icon' => 'gift', 'title' => 'Free Trial Access', 'desc' => 'Get 14 days of platform access with sample Nigerian banking data.'],
                        ] as $benefit)
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-accent/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="font-semibold">{{ $benefit['title'] }}</h4>
                                <p class="text-sm text-white/60">{{ $benefit['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="flex items-center gap-6 text-sm text-white/50">
                        <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> No credit card required</span>
                        <span class="flex items-center gap-2"><svg class="w-4 h-4 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> No obligation</span>
                    </div>
                </div>

                {{-- Demo Form --}}
                <div class="bg-white rounded-2xl shadow-2xl p-8 lg:p-10">
                    <h2 class="text-2xl font-bold text-text-primary mb-6">Request Your Free Demo</h2>

                    @if(session('success'))
                    <div class="bg-secondary/10 text-secondary p-4 rounded-xl mb-6 font-medium">{{ session('success') }}</div>
                    @endif

                    <form action="/leads" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="form_type" value="demo">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-1.5">First Name *</label>
                                <input type="text" name="first_name" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-primary mb-1.5">Last Name *</label>
                                <input type="text" name="last_name" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Work Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="john@institution.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Company</label>
                            <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Your Institution">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Your Role</label>
                            <select name="role" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm text-text-secondary">
                                <option value="">Select your role</option>
                                <option>Chief Audit Executive</option>
                                <option>Chief Risk Officer</option>
                                <option>Chief Compliance Officer</option>
                                <option>Head of Internal Audit</option>
                                <option>IT / Technology</option>
                                <option>Board Member</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Phone</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="+234 ...">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-text-primary mb-1.5">Message (Optional)</label>
                            <textarea name="message" rows="3" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none" placeholder="Tell us about your GRC challenges..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-accent hover:bg-accent-light text-white font-bold py-4 rounded-xl transition-all shadow-lg text-base">Book My Free Demo</button>
                        <p class="text-xs text-text-secondary text-center">By submitting, you agree to our <a href="/legal/privacy" class="underline">Privacy Policy</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
