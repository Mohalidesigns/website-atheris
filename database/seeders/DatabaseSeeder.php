<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Solution;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Faq;
use App\Models\Category;
use App\Models\Post;
use App\Models\TeamMember;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'author']);
        Role::create(['name' => 'viewer']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@atherislimited.com',
            'password' => bcrypt('@th3Ri$Limit3d'),
        ]);
        $admin->assignRole('admin');

        $settings = [
            ['key' => 'site_name', 'value' => 'Atheris Limited', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => "Africa's AI-First GRC Platform", 'group' => 'general'],
            ['key' => 'site_logo', 'value' => '', 'group' => 'general', 'type' => 'image'],
            ['key' => 'site_logo_light', 'value' => '', 'group' => 'general', 'type' => 'image'],
            ['key' => 'contact_email', 'value' => 'info@atherislimited.com', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '+234 1 234 5678', 'group' => 'contact'],
            ['key' => 'address', 'value' => 'Victoria Island, Lagos, Nigeria', 'group' => 'contact'],
            ['key' => 'linkedin', 'value' => 'https://linkedin.com/company/atheris', 'group' => 'social'],
            ['key' => 'twitter', 'value' => 'https://twitter.com/atherislimited', 'group' => 'social'],
            ['key' => 'facebook', 'value' => 'https://facebook.com/atherislimited', 'group' => 'social'],
            ['key' => 'instagram', 'value' => 'https://instagram.com/atherislimited', 'group' => 'social'],
            ['key' => 'ga_tracking_id', 'value' => '', 'group' => 'analytics'],
            ['key' => 'gtm_id', 'value' => '', 'group' => 'analytics'],
            ['key' => 'fb_pixel_id', 'value' => '', 'group' => 'analytics'],
            ['key' => 'custom_head_scripts', 'value' => '', 'group' => 'analytics', 'type' => 'textarea'],
            ['key' => 'custom_body_scripts', 'value' => '', 'group' => 'analytics', 'type' => 'textarea'],
        ];
        foreach ($settings as $s) Setting::create($s);

        $solutions = [
            ['title' => 'Audit Management', 'slug' => 'audit-management', 'icon' => 'clipboard-check', 'tagline' => 'Audit Management Built for Nigerian Banks', 'description' => 'From risk-based audit planning to CBN examination-ready reports — automates every step of the internal audit lifecycle.', 'challenges' => [['title' => 'Manual audit processes', 'desc' => 'Paper-based audit programs lead to inconsistencies and CBN examination failures.'], ['title' => 'Evidence bottleneck', 'desc' => 'Teams spend 40% of time chasing documentation across departments.'], ['title' => 'Reporting gaps', 'desc' => 'Boards lack real-time audit status visibility.']], 'features' => [['title' => 'Risk-Based Audit Planning', 'desc' => 'Auto-generate plans based on risk register and CBN ORMS guidelines.', 'icon' => 'target'], ['title' => 'Digital Working Papers', 'desc' => 'Structured, searchable working papers with version control.', 'icon' => 'file-text'], ['title' => 'AI Observation Engine', 'desc' => 'AI drafts observations, recommends risk ratings, maps to CBN categories.', 'icon' => 'cpu'], ['title' => 'CBN-Ready Reports', 'desc' => 'One-click export in CBN-specified formats.', 'icon' => 'file-check'], ['title' => 'Real-Time Dashboard', 'desc' => 'Live progress for CAE, audit committee, and board.', 'icon' => 'bar-chart'], ['title' => 'Issue Tracker', 'desc' => 'Findings auto-flow into remediation tracking.', 'icon' => 'git-branch']], 'how_it_works' => [['step' => 1, 'title' => 'Setup', 'desc' => 'Import risk register, define audit universe.'], ['step' => 2, 'title' => 'Configure', 'desc' => 'Build programs, assign teams, set templates.'], ['step' => 3, 'title' => 'Automate', 'desc' => 'Execute with AI and generate reports.']], 'roi_metrics' => [['metric' => '60%', 'label' => 'Faster audit cycles'], ['metric' => '40%', 'label' => 'Time saved'], ['metric' => '₦12M', 'label' => 'Annual savings']], 'status' => 'published', 'sort_order' => 1],
            ['title' => 'Enterprise Risk Management', 'slug' => 'enterprise-risk-management', 'icon' => 'shield', 'tagline' => 'Enterprise Risk Management for Africa', 'description' => 'AI-powered RCSA, Monte Carlo simulation, and real-time dashboards aligned to CBN ORMS guidelines.', 'challenges' => [['title' => 'Fragmented risk data', 'desc' => 'Risk registers scattered with no single source of truth.'], ['title' => 'Reactive management', 'desc' => 'Institutions respond to risks only after they materialize.'], ['title' => 'Compliance gaps', 'desc' => 'Manual processes fail to demonstrate CBN ORMS compliance.']], 'features' => [['title' => 'AI-Powered RCSA', 'desc' => 'Automated Risk and Control Self-Assessment with intelligent scoring.', 'icon' => 'cpu'], ['title' => 'Monte Carlo Simulation', 'desc' => 'Probabilistic risk modeling for loss quantification.', 'icon' => 'trending-up'], ['title' => 'Risk Register', 'desc' => 'Centralized register with escalation workflows.', 'icon' => 'database'], ['title' => 'Risk Dashboard', 'desc' => 'Executive dashboards with KRI monitoring.', 'icon' => 'bar-chart'], ['title' => 'Regulatory Alignment', 'desc' => 'Pre-built CBN ORMS, Basel III, COSO alignment.', 'icon' => 'check-circle'], ['title' => 'Incident Correlation', 'desc' => 'Auto-correlate risk events with findings.', 'icon' => 'git-merge']], 'how_it_works' => [['step' => 1, 'title' => 'Setup', 'desc' => 'Configure taxonomy, import registers.'], ['step' => 2, 'title' => 'Assess', 'desc' => 'Run RCSA workshops and model scenarios.'], ['step' => 3, 'title' => 'Monitor', 'desc' => 'Continuous KRI monitoring and board reporting.']], 'roi_metrics' => [['metric' => '70%', 'label' => 'Faster assessments'], ['metric' => '45%', 'label' => 'Fewer incidents'], ['metric' => '₦18M', 'label' => 'Annual savings']], 'status' => 'published', 'sort_order' => 2],
            ['title' => 'Controls Management', 'slug' => 'controls-management', 'icon' => 'settings', 'tagline' => 'Automated Controls Testing & Monitoring', 'description' => 'Build, test, and monitor your control environment with automated evidence collection.', 'challenges' => [['title' => 'Manual testing', 'desc' => 'Annual spreadsheet testing misses failures.'], ['title' => 'Evidence fragmentation', 'desc' => 'Evidence scattered across emails and drives.'], ['title' => 'Framework overload', 'desc' => 'Teams struggle mapping controls to multiple frameworks.']], 'features' => [['title' => 'Control Library', 'desc' => 'Pre-built libraries mapped to CBN, BOFIA, NDPA.', 'icon' => 'book'], ['title' => 'Automated Testing', 'desc' => 'Schedule tests with configurable procedures.', 'icon' => 'check-square'], ['title' => 'Continuous Monitoring', 'desc' => 'Real-time effectiveness monitoring with alerts.', 'icon' => 'activity'], ['title' => 'Evidence Management', 'desc' => 'Centralized repository with audit trail.', 'icon' => 'folder'], ['title' => 'Framework Mapping', 'desc' => 'Map to CBN, COSO, ISO 27001, COBIT.', 'icon' => 'layers'], ['title' => 'Remediation Tracking', 'desc' => 'Deficiency workflows with SLA tracking.', 'icon' => 'tool']], 'how_it_works' => [['step' => 1, 'title' => 'Define', 'desc' => 'Import or build control framework.'], ['step' => 2, 'title' => 'Test', 'desc' => 'Execute automated and manual tests.'], ['step' => 3, 'title' => 'Monitor', 'desc' => 'Continuous dashboards and remediation.']], 'roi_metrics' => [['metric' => '80%', 'label' => 'Less testing effort'], ['metric' => '90%', 'label' => 'Faster evidence collection'], ['metric' => '₦8M', 'label' => 'Annual savings']], 'status' => 'published', 'sort_order' => 3],
            ['title' => 'Compliance Management', 'slug' => 'compliance-management', 'icon' => 'check-circle', 'tagline' => 'Stay Ahead of Nigerian Regulations', 'description' => 'Automated compliance tracking and gap analysis for CBN, BOFIA, NDPA, and AML/CFT.', 'challenges' => [['title' => 'Regulatory complexity', 'desc' => '200+ requirements across CBN, BOFIA, NDPA.'], ['title' => 'Manual tracking', 'desc' => 'Spreadsheets with no automated deadline alerts.'], ['title' => 'Change management', 'desc' => 'New circulars missed leading to penalties.']], 'features' => [['title' => 'Regulatory Library', 'desc' => 'Pre-loaded CBN, BOFIA, NDPA requirements.', 'icon' => 'book-open'], ['title' => 'Gap Analysis', 'desc' => 'Automated analysis with action plans.', 'icon' => 'search'], ['title' => 'Obligation Tracking', 'desc' => 'Deadline reminders and escalation.', 'icon' => 'clock'], ['title' => 'Change Monitor', 'desc' => 'AI monitoring of regulatory changes.', 'icon' => 'bell'], ['title' => 'Policy Management', 'desc' => 'Centralized policies with approval workflows.', 'icon' => 'file-text'], ['title' => 'Compliance Reporting', 'desc' => 'Board and regulatory reports.', 'icon' => 'pie-chart']], 'how_it_works' => [['step' => 1, 'title' => 'Map', 'desc' => 'Map obligations to requirements.'], ['step' => 2, 'title' => 'Track', 'desc' => 'Monitor with alerts and gap analysis.'], ['step' => 3, 'title' => 'Report', 'desc' => 'Generate regulatory reports.']], 'roi_metrics' => [['metric' => '95%', 'label' => 'Compliance coverage'], ['metric' => '50%', 'label' => 'Faster reporting'], ['metric' => '₦0', 'label' => 'Penalties avoided']], 'status' => 'published', 'sort_order' => 4],
            ['title' => 'Incident & Issue Management', 'slug' => 'incident-management', 'icon' => 'alert-triangle', 'tagline' => 'Centralized Incident Capture & Resolution', 'description' => 'Capture, escalate, and resolve incidents through structured workflows with full audit trail.', 'challenges' => [['title' => 'Scattered data', 'desc' => 'Incidents via email and phone with no tracking.'], ['title' => 'Slow resolution', 'desc' => 'Manual escalation delays response.'], ['title' => 'No trend analysis', 'desc' => 'Recurring issues not identified.']], 'features' => [['title' => 'Capture Portal', 'desc' => 'Multi-channel capture with auto-categorization.', 'icon' => 'inbox'], ['title' => 'Workflow Automation', 'desc' => 'Configurable escalation with SLA tracking.', 'icon' => 'git-branch'], ['title' => 'Root Cause Analysis', 'desc' => 'Structured RCA templates with CAPA tracking.', 'icon' => 'search'], ['title' => 'Trend Analytics', 'desc' => 'AI-powered trend analysis.', 'icon' => 'trending-up'], ['title' => 'Regulatory Reporting', 'desc' => 'Automated CBN and NDIC reports.', 'icon' => 'send'], ['title' => 'Integration Hub', 'desc' => 'Connect to risks, controls, and audit.', 'icon' => 'link']], 'how_it_works' => [['step' => 1, 'title' => 'Capture', 'desc' => 'Report via portal, email, or API.'], ['step' => 2, 'title' => 'Investigate', 'desc' => 'Auto-triage and root cause analysis.'], ['step' => 3, 'title' => 'Resolve', 'desc' => 'Track remediation and prevent recurrence.']], 'roi_metrics' => [['metric' => '75%', 'label' => 'Faster resolution'], ['metric' => '60%', 'label' => 'Fewer recurring issues'], ['metric' => '100%', 'label' => 'Regulatory compliance']], 'status' => 'published', 'sort_order' => 5],
            ['title' => 'Business Continuity', 'slug' => 'business-continuity', 'icon' => 'refresh-cw', 'tagline' => 'BCP & BIA Aligned to CBN Requirements', 'description' => 'Build, test, and maintain BCP and BIA in line with CBN BCM guidelines.', 'challenges' => [['title' => 'Outdated BCPs', 'desc' => 'Static documents never tested or updated.'], ['title' => 'No impact analysis', 'desc' => 'BIA done once and never revisited.'], ['title' => 'Regulatory pressure', 'desc' => 'CBN requires evidence of tested BCM programs.']], 'features' => [['title' => 'BIA Management', 'desc' => 'Dynamic BIA with dependency mapping.', 'icon' => 'zap'], ['title' => 'BCP Builder', 'desc' => 'Template-based with CBN alignment.', 'icon' => 'edit'], ['title' => 'Testing & Exercises', 'desc' => 'Plan and document BCM tests.', 'icon' => 'play-circle'], ['title' => 'Crisis Communication', 'desc' => 'Automated notification workflows.', 'icon' => 'phone'], ['title' => 'Recovery Tracking', 'desc' => 'RTO/RPO monitoring and escalation.', 'icon' => 'clock'], ['title' => 'BCM Reporting', 'desc' => 'Automated CBN and board reports.', 'icon' => 'file-text']], 'how_it_works' => [['step' => 1, 'title' => 'Analyze', 'desc' => 'Conduct BIA, identify critical processes.'], ['step' => 2, 'title' => 'Plan', 'desc' => 'Build BCPs with CBN templates.'], ['step' => 3, 'title' => 'Test', 'desc' => 'Execute tests and maintain documentation.']], 'roi_metrics' => [['metric' => '100%', 'label' => 'BCM compliance'], ['metric' => '50%', 'label' => 'Faster activation'], ['metric' => '4hrs', 'label' => 'RTO improvement']], 'status' => 'published', 'sort_order' => 6],
            ['title' => 'ESG Management', 'slug' => 'esg-management', 'icon' => 'globe', 'tagline' => 'Sustainability Meets Accountability', 'description' => 'Track environmental, social, and governance metrics with AI-powered data collection, multi-framework reporting, and Nigerian regulatory alignment.', 'challenges' => [['title' => 'Investor Demands', 'desc' => 'International investors require ESG disclosures before committing capital.'], ['title' => 'NGX Sustainability Rules', 'desc' => 'Nigerian Exchange mandates sustainability reporting for listed companies.'], ['title' => 'Scattered ESG Data', 'desc' => 'ESG information siloed across departments with no single source of truth.']], 'features' => [['title' => 'Multi-Framework Reporting', 'desc' => 'Generate reports aligned with GRI, SASB, TCFD, UN SDGs, and NGX guidelines.', 'icon' => 'bar-chart'], ['title' => 'AI Data Collection', 'desc' => 'Automatically aggregate ESG data from HR, facilities, and financial systems.', 'icon' => 'cpu'], ['title' => 'ESG Risk Scoring', 'desc' => 'Quantify ESG risks with models calibrated for Nigerian market conditions.', 'icon' => 'trending-up'], ['title' => 'Materiality Assessment', 'desc' => 'Identify and prioritise ESG topics that matter to your stakeholders.', 'icon' => 'target'], ['title' => 'Sustainability Dashboards', 'desc' => 'Real-time dashboards with peer benchmarking and target tracking.', 'icon' => 'pie-chart'], ['title' => 'Audit Trail', 'desc' => 'Complete data lineage for external assurance engagements.', 'icon' => 'check-circle']], 'how_it_works' => [['step' => 1, 'title' => 'Configure', 'desc' => 'Select frameworks, define material topics, set targets.'], ['step' => 2, 'title' => 'Collect', 'desc' => 'AI aggregates data from across your organisation.'], ['step' => 3, 'title' => 'Report', 'desc' => 'Generate investor-ready sustainability reports.']], 'roi_metrics' => [['metric' => '80%', 'label' => 'Faster ESG reporting'], ['metric' => '200+', 'label' => 'Metrics tracked'], ['metric' => '100%', 'label' => 'NGX compliance']], 'status' => 'published', 'sort_order' => 7],
        ];
        foreach ($solutions as $s) Solution::create($s);

        $testimonials = [
            ['quote' => 'Atheris transformed our audit process. What took 3 months now takes 6 weeks. The CBN-ready reports saved us hundreds of hours.', 'author_name' => 'Adebayo Ogunlesi', 'author_title' => 'Chief Audit Executive', 'company' => 'Leading Nigerian Bank', 'is_featured' => true, 'sort_order' => 1],
            ['quote' => 'Pre-loaded Nigerian regulatory content was a game-changer. No more mapping global frameworks to local requirements.', 'author_name' => 'Chioma Nwosu', 'author_title' => 'Chief Risk Officer', 'company' => 'Top-5 Commercial Bank', 'is_featured' => true, 'sort_order' => 2],
            ['quote' => 'We evaluated Diligent and Archer, but Atheris truly understood Nigerian banking compliance. Naira pricing sealed the deal.', 'author_name' => 'Emeka Okafor', 'author_title' => 'Chief Compliance Officer', 'company' => 'Major Nigerian Bank', 'is_featured' => true, 'sort_order' => 3],
        ];
        foreach ($testimonials as $t) Testimonial::create($t);

        $partners = ['FirstBank', 'Access Bank', 'Zenith Bank', 'GTBank', 'UBA', 'Stanbic IBTC', 'Fidelity Bank', 'Sterling Bank', 'Wema Bank', 'FCMB'];
        foreach ($partners as $i => $name) Partner::create(['name' => $name, 'type' => 'client', 'sort_order' => $i + 1]);

        $faqs = [
            ['question' => 'What is Atheris?', 'answer' => "Atheris is Africa's first AI-powered GRC platform, purpose-built for Nigerian and African financial institutions with native CBN, BOFIA, and NDPA compliance.", 'category' => 'general', 'sort_order' => 1],
            ['question' => 'How is Atheris different from Diligent?', 'answer' => 'Atheris is built specifically for Africa with pre-loaded Nigerian regulatory content, Naira pricing, local data residency, and 8-week deployment versus 6-18 months for global platforms.', 'category' => 'general', 'sort_order' => 2],
            ['question' => 'Is Atheris NDPA 2023 compliant?', 'answer' => 'Yes. All data stored on AWS Lagos (af-south-1) with no cross-border transfer, full consent management, and data deletion capabilities.', 'category' => 'compliance', 'sort_order' => 3],
            ['question' => 'How long does implementation take?', 'answer' => 'Average deployment is 6-8 weeks with our Lagos-based implementation team.', 'category' => 'general', 'sort_order' => 4],
            ['question' => 'What pricing plans are available?', 'answer' => 'Starter from ₦2.5M/year, Professional from ₦8M/year, Enterprise custom. All in Naira with zero FX risk.', 'category' => 'pricing', 'sort_order' => 5],
        ];
        foreach ($faqs as $f) Faq::create($f);

        $categories = [
            ['name' => 'CBN Regulatory Updates', 'slug' => 'cbn-updates'],
            ['name' => 'Audit Excellence', 'slug' => 'audit-excellence'],
            ['name' => 'Risk Management', 'slug' => 'risk-management'],
            ['name' => 'Compliance', 'slug' => 'compliance'],
            ['name' => 'Industry Insights', 'slug' => 'industry-insights'],
        ];
        foreach ($categories as $c) Category::create($c);

        $posts = [
            ['title' => 'Understanding BOFIA 2020: What Nigerian Banks Need to Know', 'slug' => 'understanding-bofia-2020', 'excerpt' => 'A comprehensive guide to BOFIA 2020 and its implications for compliance teams.', 'body' => '<p>The Banks and Other Financial Institutions Act 2020 represents the most significant update to Nigerian banking regulation in decades.</p>', 'author_id' => $admin->id, 'category_id' => 1, 'tags' => ['BOFIA', 'Regulation'], 'status' => 'published', 'published_at' => now()->subDays(5), 'reading_time' => 8],
            ['title' => 'How AI is Transforming Internal Audit in Nigerian Banks', 'slug' => 'ai-transforming-audit', 'excerpt' => 'How AI is revolutionizing audit planning and reporting for Nigerian institutions.', 'body' => '<p>Artificial intelligence is transforming internal audit from a reactive function to a predictive, data-driven discipline.</p>', 'author_id' => $admin->id, 'category_id' => 2, 'tags' => ['AI', 'Audit'], 'status' => 'published', 'published_at' => now()->subDays(10), 'reading_time' => 6],
            ['title' => 'NDPA 2023 Compliance Checklist', 'slug' => 'ndpa-compliance-checklist', 'excerpt' => 'A practical checklist for NDPA 2023 compliance in financial institutions.', 'body' => '<p>The Nigeria Data Protection Act 2023 establishes a comprehensive data protection framework for Nigerian organizations.</p>', 'author_id' => $admin->id, 'category_id' => 4, 'tags' => ['NDPA', 'Privacy'], 'status' => 'published', 'published_at' => now()->subDays(15), 'reading_time' => 10],
        ];
        foreach ($posts as $p) Post::create($p);

        $team = [
            ['name' => 'Olumide Adeyemi', 'title' => 'Chief Executive Officer', 'bio' => 'Former risk management executive with 20+ years in Nigerian banking.', 'sort_order' => 1],
            ['name' => 'Funke Abiodun', 'title' => 'Chief Technology Officer', 'bio' => 'Engineering leader with deep expertise in enterprise SaaS and AI/ML.', 'sort_order' => 2],
            ['name' => 'Ibrahim Musa', 'title' => 'Chief Risk Officer', 'bio' => 'Former CBN examiner with 15 years of regulatory experience.', 'sort_order' => 3],
            ['name' => 'Ngozi Okonkwo', 'title' => 'VP Engineering', 'bio' => 'Full-stack engineering leader specializing in secure fintech platforms.', 'sort_order' => 4],
            ['name' => 'Tunde Bakare', 'title' => 'Head of Product', 'bio' => 'Product strategist building GRC tools for African institutions.', 'sort_order' => 5],
            ['name' => 'Amina Yusuf', 'title' => 'Head of Customer Success', 'bio' => 'Customer success expert with deep knowledge of Nigerian banking.', 'sort_order' => 6],
        ];
        foreach ($team as $t) TeamMember::create($t);
    }
}
