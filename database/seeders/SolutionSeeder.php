<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

/**
 * Idempotent seeder for the IT Governance and Information Security suite
 * modules. Run with:
 *   php artisan db:seed --class=SolutionSeeder
 */
class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        Solution::updateOrCreate(
            ['slug' => 'it-governance'],
            [
                'title' => 'IT Governance',
                'slug' => 'it-governance',
                'icon' => 'server',
                'tagline' => 'Govern IT Like a Strategic Asset',
                'description' => 'Know every IT asset, govern every change, track every risk indicator, and prove compliance with the CBN Risk-Based Cybersecurity Supervision Framework and NDPA 2023 — with board-ready reporting built in.',
                'challenges' => [
                    ['title' => 'Spreadsheet governance', 'desc' => 'Asset lists, change logs, and risk registers scattered across Excel files that contradict each other and that no one trusts during an examination.'],
                    ['title' => 'Regulatory pressure', 'desc' => 'CBN risk-based supervision and NDPA 2023 demand verifiable evidence of IT governance. Manual compilation takes weeks and still leaves gaps.'],
                    ['title' => 'No board visibility', 'desc' => 'IT risk is reported anecdotally, leaving directors unable to meet their governance obligations or make informed technology investment decisions.'],
                ],
                'features' => [
                    ['title' => 'IT Asset Register', 'desc' => 'A single source of truth for hardware, software, and cloud assets with ownership, criticality, lifecycle state, and dependency mapping.', 'icon' => 'database'],
                    ['title' => 'Enterprise Architecture Views', 'desc' => 'Business-to-technology mapping with blast-radius analysis, so you know exactly what an outage, migration, or incident really touches.', 'icon' => 'layers'],
                    ['title' => 'Change Governance', 'desc' => 'Structured change requests with maker-checker approvals, risk scoring, and a full audit trail of who approved what and when.', 'icon' => 'git-branch'],
                    ['title' => 'Vulnerability & CVE Management', 'desc' => 'Track CVEs against your actual asset estate, assign remediation owners, and enforce risk-based SLAs with escalation.', 'icon' => 'alert-triangle'],
                    ['title' => 'Key Risk Indicators', 'desc' => 'Define, measure, and escalate KRIs with threshold-based alerts that surface IT risk before it becomes a board conversation.', 'icon' => 'activity'],
                    ['title' => 'Corrective & Preventive Actions', 'desc' => 'CAPA tracking from audit findings and regulatory examinations through to verified closure, with evidence attached to every action.', 'icon' => 'check-circle'],
                    ['title' => 'Regulatory Returns & ROPA', 'desc' => 'Records of processing activities for NDPA 2023 compliance and structured regulatory returns without the spreadsheet scramble.', 'icon' => 'file-text'],
                    ['title' => 'Vendor Governance', 'desc' => 'Third-party IT oversight with due-diligence records, contract tracking, and performance monitoring across your supplier estate.', 'icon' => 'link'],
                    ['title' => 'Board Packs & Reporting', 'desc' => 'One-click board reporting that turns asset, risk, change, and remediation data into a governance story executives can act on.', 'icon' => 'pie-chart'],
                ],
                'how_it_works' => [
                    ['step' => 1, 'title' => 'Register your estate', 'desc' => 'Import IT assets, owners, and criticality ratings into the central register.'],
                    ['step' => 2, 'title' => 'Map risk & govern changes', 'desc' => 'Link assets to capabilities, KRIs, and vendors; run approvals and CAPA workflows with enforced SLAs.'],
                    ['step' => 3, 'title' => 'Report & assure', 'desc' => 'Generate board packs and regulatory evidence on demand.'],
                ],
                'roi_metrics' => [
                    ['metric' => '100%', 'label' => 'Asset ownership traceability'],
                    ['metric' => '3x', 'label' => 'Faster audit remediation cycles'],
                    ['metric' => '1 day', 'label' => 'Board pack production, down from weeks'],
                ],
                'meta_title' => 'IT Governance Software for Nigerian Banks | Atheris',
                'meta_description' => 'IT asset register, change governance, KRI monitoring, CAPA tracking, and board reporting for Nigerian financial institutions. CBN and NDPA 2023 aligned.',
                'status' => 'published',
                'sort_order' => 8,
            ]
        );

        Solution::updateOrCreate(
            ['slug' => 'information-security'],
            [
                'title' => 'Information Security',
                'slug' => 'information-security',
                'icon' => 'lock',
                'tagline' => 'See Every Threat. Prove Every Control.',
                'description' => 'Unify security incident management, vulnerability remediation, security change review, and a tamper-evident evidence register — so your SOC runs on one platform and your next regulatory examination is a non-event.',
                'challenges' => [
                    ['title' => 'Alert overload, no context', 'desc' => 'Security tools generate endless noise. Without asset context and criticality, teams cannot prioritise what actually matters.'],
                    ['title' => 'Scattered audit evidence', 'desc' => 'Evidence lives in emails, SharePoint folders, and screenshots — impossible to verify, easy to lose, and expensive to reconstruct during examinations.'],
                    ['title' => 'Slow incident response', 'desc' => 'Manual coordination across chat, email, and tickets stretches response times and weakens regulatory breach reporting.'],
                ],
                'features' => [
                    ['title' => 'Security Incident Management', 'desc' => 'Classify, escalate, and resolve security incidents with structured timelines, severity workflows, and post-incident reviews.', 'icon' => 'alert-triangle'],
                    ['title' => 'Vulnerability Management', 'desc' => 'Ingest scanner output, deduplicate findings, and drive risk-based remediation with SLA tracking per severity.', 'icon' => 'shield'],
                    ['title' => 'Tamper-Evident Evidence Register', 'desc' => 'Sealed, content-hashed evidence with stale-detection lifecycle — regulators see verifiable proof, not promises.', 'icon' => 'lock'],
                    ['title' => 'Security Change Review', 'desc' => 'Security sign-off on changes before production, integrated with your CAB process and asset criticality ratings.', 'icon' => 'git-branch'],
                    ['title' => 'Security Architecture Review', 'desc' => 'Structured architecture assessments for new systems and vendors, with findings tracked through to closure.', 'icon' => 'layers'],
                    ['title' => 'Configuration Drift Detection', 'desc' => 'Monitor security baselines across your estate and flag drift before it becomes an exposure.', 'icon' => 'activity'],
                    ['title' => 'Security KRI Dashboards', 'desc' => 'Live indicators on incident volume, mean time to respond, patch SLAs, and control health for CISO and board reporting.', 'icon' => 'bar-chart'],
                    ['title' => 'Third-Party Security Assurance', 'desc' => 'Vendor security assessments, due-diligence records, and continuous oversight of outsourced risk.', 'icon' => 'link'],
                    ['title' => 'ROPA & Data Protection', 'desc' => 'Records of processing activities and breach workflows aligned to NDPA 2023 obligations, including regulator notification support.', 'icon' => 'file-text'],
                ],
                'how_it_works' => [
                    ['step' => 1, 'title' => 'Connect your estate', 'desc' => 'Sync assets from IT Governance and ingest scanner, SIEM, and ticket feeds.'],
                    ['step' => 2, 'title' => 'Detect & respond', 'desc' => 'Correlate incidents, vulnerabilities, and drift against asset criticality; run structured response workflows with enforced SLAs.'],
                    ['step' => 3, 'title' => 'Prove & report', 'desc' => 'Seal evidence in the register and generate CISO and regulatory reports on demand.'],
                ],
                'roi_metrics' => [
                    ['metric' => '50%', 'label' => 'Faster incident triage with asset context'],
                    ['metric' => '100%', 'label' => 'Tamper-evident, seal-verified evidence'],
                    ['metric' => '24/7', 'label' => 'KRI monitoring across your security programme'],
                ],
                'meta_title' => 'Information Security Management Software for Nigerian Banks | Atheris',
                'meta_description' => 'Security incident management, vulnerability remediation, tamper-evident evidence register, and security KRI dashboards for Nigerian banks and financial institutions.',
                'status' => 'published',
                'sort_order' => 9,
            ]
        );
    }
}
