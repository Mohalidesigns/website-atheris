<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class PageSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Homepage additional images
            ['key' => 'homepage_ai_image', 'value' => '', 'group' => 'homepage', 'type' => 'image'],
            ['key' => 'homepage_africa_map_image', 'value' => '', 'group' => 'homepage', 'type' => 'image'],

            // Platform Overview
            ['key' => 'page_platform_hero_title', 'value' => 'One Platform.<br><span class="text-accent">Complete GRC Coverage.</span>', 'group' => 'page_platform', 'type' => 'text'],
            ['key' => 'page_platform_hero_subtitle', 'value' => 'Six fully integrated modules covering every dimension of governance, risk, and compliance — all aligned to Nigerian regulatory requirements and powered by AI.', 'group' => 'page_platform', 'type' => 'textarea'],
            ['key' => 'page_platform_architecture_image', 'value' => '', 'group' => 'page_platform', 'type' => 'image'],
            ['key' => 'page_platform_integration_image', 'value' => '', 'group' => 'page_platform', 'type' => 'image'],

            // Platform AI
            ['key' => 'page_platform_ai_hero_title', 'value' => 'AI Risk Intelligence<br><span class="text-accent">Engine</span>', 'group' => 'page_platform_ai', 'type' => 'text'],
            ['key' => 'page_platform_ai_hero_subtitle', 'value' => 'Not bolted-on AI. Our intelligence engine is the foundation — predicting, automating, and monitoring your entire GRC landscape.', 'group' => 'page_platform_ai', 'type' => 'textarea'],
            ['key' => 'page_platform_ai_screenshot', 'value' => '', 'group' => 'page_platform_ai', 'type' => 'image'],

            // Platform Security
            ['key' => 'page_security_hero_title', 'value' => 'Security & Trust Center', 'group' => 'page_security', 'type' => 'text'],
            ['key' => 'page_security_hero_subtitle', 'value' => 'Enterprise-grade security with Nigerian data residency compliance. Your data never leaves Africa.', 'group' => 'page_security', 'type' => 'textarea'],

            // Platform Integrations
            ['key' => 'page_integrations_hero_title', 'value' => 'Connect Your <span class="text-accent">Entire Ecosystem</span>', 'group' => 'page_integrations', 'type' => 'text'],
            ['key' => 'page_integrations_hero_subtitle', 'value' => 'Atheris integrates seamlessly with the tools your team already uses — from core banking systems to collaboration platforms.', 'group' => 'page_integrations', 'type' => 'textarea'],

            // Pricing
            ['key' => 'page_pricing_hero_title', 'value' => 'Transparent Naira Pricing', 'group' => 'page_pricing', 'type' => 'text'],
            ['key' => 'page_pricing_hero_subtitle', 'value' => 'Zero FX risk. No hidden fees. Enterprise GRC at African-friendly pricing.', 'group' => 'page_pricing', 'type' => 'textarea'],

            // Demo
            ['key' => 'page_demo_hero_title', 'value' => 'See Atheris in Action', 'group' => 'page_demo', 'type' => 'text'],
            ['key' => 'page_demo_hero_subtitle', 'value' => "Book a personalized 30-minute demo with our team. We'll walk you through the modules relevant to your role using real Nigerian banking scenarios.", 'group' => 'page_demo', 'type' => 'textarea'],

            // About
            ['key' => 'page_about_hero_title', 'value' => 'Built in Lagos.<br><span class="text-accent">Trusted Across Africa.</span>', 'group' => 'page_about', 'type' => 'text'],
            ['key' => 'page_about_hero_subtitle', 'value' => "We're on a mission to build the most advanced GRC platform for African financial institutions — one that truly understands local regulations, local challenges, and local ambitions.", 'group' => 'page_about', 'type' => 'textarea'],
            ['key' => 'page_about_mission_text', 'value' => 'To democratize enterprise-grade governance, risk, and compliance technology for African financial institutions — making world-class GRC accessible, affordable, and culturally aligned.', 'group' => 'page_about', 'type' => 'textarea'],
            ['key' => 'page_about_vision_text', 'value' => 'To be the undisputed GRC platform of choice for every regulated financial institution in Africa — from the largest Tier-1 banks to the smallest microfinance institutions.', 'group' => 'page_about', 'type' => 'textarea'],

            // Careers
            ['key' => 'page_careers_hero_title', 'value' => 'Join the <span class="text-accent">Atheris Team</span>', 'group' => 'page_careers', 'type' => 'text'],
            ['key' => 'page_careers_hero_subtitle', 'value' => "Help us build the future of GRC for Africa. We're always looking for talented people.", 'group' => 'page_careers', 'type' => 'textarea'],

            // Customers
            ['key' => 'page_customers_hero_title', 'value' => 'Customer <span class="text-accent">Success Stories</span>', 'group' => 'page_customers', 'type' => 'text'],
            ['key' => 'page_customers_hero_subtitle', 'value' => 'See how leading Nigerian financial institutions transform their GRC with Atheris.', 'group' => 'page_customers', 'type' => 'textarea'],

            // Partners
            ['key' => 'page_partners_hero_title', 'value' => 'Partner <span class="text-accent">Program</span>', 'group' => 'page_partners', 'type' => 'text'],
            ['key' => 'page_partners_hero_subtitle', 'value' => "Join Africa's fastest-growing GRC ecosystem.", 'group' => 'page_partners', 'type' => 'textarea'],

            // Whitepapers
            ['key' => 'page_whitepapers_hero_title', 'value' => 'Whitepapers & Reports', 'group' => 'page_whitepapers', 'type' => 'text'],
            ['key' => 'page_whitepapers_hero_subtitle', 'value' => 'In-depth research on GRC, Nigerian compliance, and risk management.', 'group' => 'page_whitepapers', 'type' => 'textarea'],

            // CBN Hub
            ['key' => 'page_cbn_hub_hero_title', 'value' => 'CBN Compliance <span class="text-accent">Hub</span>', 'group' => 'page_cbn_hub', 'type' => 'text'],
            ['key' => 'page_cbn_hub_hero_subtitle', 'value' => 'Your one-stop resource for Nigerian Central Bank regulatory compliance.', 'group' => 'page_cbn_hub', 'type' => 'textarea'],

            // Comparison vs Diligent
            ['key' => 'page_vs_diligent_hero_title', 'value' => 'Why Nigerian Banks Choose<br><span class="text-accent">Atheris Over Diligent</span>', 'group' => 'page_vs_diligent', 'type' => 'text'],
            ['key' => 'page_vs_diligent_hero_subtitle', 'value' => "Diligent is a great global platform. But it wasn't built for CBN guidelines, BOFIA 2020, or NDPA 2023. Atheris was.", 'group' => 'page_vs_diligent', 'type' => 'textarea'],

            // Comparison vs Archer
            ['key' => 'page_vs_archer_hero_title', 'value' => 'Atheris vs. <span class="text-accent">Archer IRM</span>', 'group' => 'page_vs_archer', 'type' => 'text'],
            ['key' => 'page_vs_archer_hero_subtitle', 'value' => 'A feature-by-feature comparison for African financial institutions.', 'group' => 'page_vs_archer', 'type' => 'textarea'],

            // Legal - Privacy
            ['key' => 'page_privacy_content', 'value' => '', 'group' => 'page_privacy', 'type' => 'textarea'],

            // Legal - Terms
            ['key' => 'page_terms_content', 'value' => '', 'group' => 'page_terms', 'type' => 'textarea'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
