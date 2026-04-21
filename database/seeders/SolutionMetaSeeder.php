<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;

/**
 * Idempotent seeder that keeps SEO meta (title + description) up to date
 * for every solution page. Run with:
 *   php artisan db:seed --class=SolutionMetaSeeder
 */
class SolutionMetaSeeder extends Seeder
{
    public function run(): void
    {
        $meta = [
            'audit-management' => [
                'meta_title' => 'AI-Powered Internal Audit Management for African Banks | Atheris',
                'meta_description' => 'AI-driven internal audit management that automates risk-based audit planning, digital working papers, observations, and CBN examination-ready reports — purpose-built for Nigerian banks.',
            ],
            'enterprise-risk-management' => [
                'meta_title' => 'AI-Powered Enterprise Risk Management for Africa | Atheris ERM',
                'meta_description' => 'AI-powered enterprise risk management with automated RCSA, Monte Carlo simulation, real-time KRI dashboards, and CBN ORMS alignment — built for Nigerian financial institutions.',
            ],
            'controls-management' => [
                'meta_title' => 'Controls Management & Automated Testing Software | Atheris',
                'meta_description' => 'Automated controls management and testing platform with pre-loaded CBN, BOFIA, and NDPA control libraries, continuous monitoring, and centralised evidence for Nigerian banks.',
            ],
            'compliance-management' => [
                'meta_title' => 'Regulatory Compliance Management Software for Nigerian Banks | Atheris',
                'meta_description' => 'AI-powered compliance management with pre-loaded CBN, BOFIA, NDPA, and AML/CFT obligations, automated gap analysis, deadline tracking, and board-ready compliance reports.',
            ],
            'incident-management' => [
                'meta_title' => 'Incident & Issue Management Software for African Institutions | Atheris',
                'meta_description' => 'Centralised incident and issue management with automated escalation, structured root-cause analysis, CAPA tracking, and CBN/NDIC regulatory reporting — all in one platform.',
            ],
            'business-continuity' => [
                'meta_title' => 'Business Continuity Management (BCM & BIA) Software | Atheris',
                'meta_description' => 'Business continuity management aligned to CBN BCM guidelines — build and maintain BIAs, BCPs, crisis communication plans, and testing schedules for Nigerian financial institutions.',
            ],
            'esg-management' => [
                'meta_title' => 'ESG Management & Sustainability Reporting Software | Atheris',
                'meta_description' => 'AI-powered ESG management with multi-framework reporting (GRI, SASB, TCFD, NGX), automated data collection, and ESG risk scoring calibrated for the Nigerian market.',
            ],
        ];

        foreach ($meta as $slug => $fields) {
            $solution = Solution::where('slug', $slug)->first();
            if (!$solution) {
                $this->command->warn("Skipped missing solution: {$slug}");
                continue;
            }
            $solution->update($fields);
            $this->command->info("Updated meta for: {$slug}");
        }
    }
}
