<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Solution;
use Illuminate\Database\Seeder;

class ProductionImageSeeder extends Seeder
{
    public function run(): void
    {
        // Hero slides with images
        Setting::updateOrCreate(['key' => 'hero_slides'], [
            'value' => json_encode([
                [
                    'title' => 'Govern with Certainty. Built for Africa.',
                    'subtitle' => "The only AI-first Governance, Risk & Compliance platform with native CBN, BOFIA 2020, and NDPA 2023 compliance — purpose-built for Nigerian financial institutions.",
                    'badge' => "Africa's #1 AI-First GRC Platform",
                    'cta_text' => 'Request a Free Demo',
                    'cta_url' => '/demo',
                    'secondary_cta_text' => 'See the Platform',
                    'secondary_cta_url' => '/platform',
                    'bg_image' => 'hero/Ic4zh1cFrKr4M4YZvAZuXUwP8fL5Ph3Eohd72kYl.png',
                ],
                [
                    'title' => 'The Intelligent Internal Audit Solution',
                    'subtitle' => 'ThirdLine is a purpose-built internal audit management platform for financial institutions and regulated industries.',
                    'badge' => 'One Platform. Full Audit Lifecycle.',
                    'cta_text' => 'Request a Free Demo',
                    'cta_url' => '/demo',
                    'secondary_cta_text' => 'See the thridLine',
                    'secondary_cta_url' => '/solutions/audit-management',
                    'bg_image' => 'hero/k8RT5Ka6mArnLgyqLm2JMkdJ69EMqT7F4RSLiCL3.png',
                ],
            ]),
            'group' => 'homepage',
            'type' => 'json',
        ]);

        // Solution images
        Solution::where('slug', 'audit-management')->update([
            'hero_image' => 'solutions/gXxLUk2KaFsZGfjDGLZOVu2LFka1FT3N9qeqmRfs.png',
        ]);

        Solution::where('slug', 'enterprise-risk-management')->update([
            'hero_image' => 'solutions/waGZVdFiZwYjL1A6onDkzBJ0VrHeCCRszF3PkT3q.png',
            'screenshots' => json_encode([
                'dashboard' => 'solutions/screenshots/fKOkN7XQUXe7QMAIws5BbSNqNmR6WTYjcKBE2Rxd.png',
                'work_programs' => 'solutions/screenshots/joNJ1K92AENyFpgoxo7DC3XfwiuwU9EhhnH1soFk.png',
                'risk' => 'solutions/screenshots/eeZLljIKkKwdlJvmb7vNGFjYjKmTxaiLRmJbPNKt.png',
                'compliance' => 'solutions/screenshots/upddCaajKbVKaw5XxaSgizWEyYl5A4TShNBYbJPD.png',
                'simulation' => 'solutions/screenshots/GOov3Oxu3TfVAev1vFQ1svNl7SHSZmWhsxyeO07w.png',
                'heatmap' => 'solutions/screenshots/eTkdwoTfik6hYi3CR9lhFA9k0oroTQjoa9XtRibD.png',
            ]),
        ]);

        // Page images
        Setting::updateOrCreate(['key' => 'page_tprm_dashboard_image'], [
            'value' => 'pages/N5bCgR7cjRViXhogz2bPFV7Lin3GMOTUprxXUmiY.png',
            'group' => 'page_tprm',
            'type' => 'image',
        ]);
    }
}
