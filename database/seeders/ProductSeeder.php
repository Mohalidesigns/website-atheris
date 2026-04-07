<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::updateOrCreate(
            ['slug' => 'visitors-management-system'],
            [
                'title' => 'Visitors Management System',
                'slug' => 'visitors-management-system',
                'tagline' => 'Know Who\'s in Your Building. At All Times.',
                'description' => 'Paper logbooks and manual sign-in sheets are a security liability. Atheris VMS replaces outdated visitor processes with a sleek digital platform that registers, tracks, and manages every person entering your facility — with real-time visibility for security teams and management.',
                'category' => 'Facility Management',
                'features' => [
                    ['title' => 'Digital Check-In Kiosk', 'desc' => 'Self-service tablet or kiosk for visitors to register with photo capture, ID scanning, and NDA acceptance.'],
                    ['title' => 'Pre-Registration & Invites', 'desc' => 'Hosts pre-register expected visitors. Visitors receive an email or SMS with a QR code for express check-in.'],
                    ['title' => 'Badge Printing', 'desc' => 'Instant visitor badge generation with photo, host name, access zones, and expiry time.'],
                    ['title' => 'Real-Time Dashboard', 'desc' => 'Live occupancy count, current visitors by floor or zone, overstay alerts, and emergency evacuation lists.'],
                    ['title' => 'Host Notifications', 'desc' => 'Automatic SMS and email alerts to the host the moment their visitor checks in.'],
                    ['title' => 'Compliance Reporting', 'desc' => 'Exportable visitor logs with timestamps, photo evidence, and host details.'],
                ],
                'challenges' => [
                    ['title' => 'Security Blind Spots', 'desc' => 'Paper logs cannot be searched in real time during incidents.'],
                    ['title' => 'Compliance Failures', 'desc' => 'CBN and NDIC regulators require verifiable visitor records.'],
                    ['title' => 'Poor Visitor Experience', 'desc' => 'Long queues and repetitive form-filling frustrate clients.'],
                ],
                'stats' => [
                    ['metric' => '60%', 'label' => 'Faster check-in process'],
                    ['metric' => '100%', 'label' => 'Audit-ready visitor records'],
                    ['metric' => '3x', 'label' => 'Better security visibility'],
                ],
                'how_it_works' => [
                    ['step' => '01', 'title' => 'Visitor Arrives', 'desc' => 'Visitor scans QR code or registers at kiosk'],
                    ['step' => '02', 'title' => 'Instant Verification', 'desc' => 'System checks watchlist, captures photo, prints badge'],
                    ['step' => '03', 'title' => 'Host Notified', 'desc' => 'Host receives SMS/email notification of arrival'],
                    ['step' => '04', 'title' => 'Check-Out', 'desc' => 'Visitor checks out, full audit trail recorded'],
                ],
                'meta_title' => 'Visitors Management System — Atheris Limited',
                'meta_description' => 'Digital visitor registration, real-time tracking, badge printing, and security compliance. Built for corporate offices, banks, and government facilities in Nigeria.',
                'status' => 'published',
                'sort_order' => 1,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'poultry-management-system'],
            [
                'title' => 'Poultry Management System',
                'slug' => 'poultry-management-system',
                'tagline' => 'Run Your Farm Like a Business.',
                'description' => 'Nigeria\'s poultry industry is a multi-billion Naira sector, yet most farms still operate on notebooks and guesswork. Atheris PMS brings data-driven precision to every aspect of poultry farming — from day-old chick intake to final sales reconciliation.',
                'category' => 'Agriculture Tech',
                'features' => [
                    ['title' => 'Flock Management', 'desc' => 'Track every batch from placement to depletion with automatic flock balance calculations.'],
                    ['title' => 'Feed Management', 'desc' => 'Record daily feed consumption, track FCR, set feeding schedules, and receive low-stock alerts.'],
                    ['title' => 'Health & Vaccination', 'desc' => 'Maintain vaccination schedules with automated reminders and treatment records.'],
                    ['title' => 'Egg Production Tracking', 'desc' => 'Daily egg collection records by house, grade, and hen-day production percentage.'],
                    ['title' => 'Financial Management', 'desc' => 'Track all income and expenses by batch with auto-calculated profit margins.'],
                    ['title' => 'Reports & Analytics', 'desc' => 'Batch performance, FCR trends, mortality analysis, and financial summaries.'],
                ],
                'challenges' => [
                    ['title' => 'Manual Record Keeping', 'desc' => 'Notebooks get lost, data is inconsistent, and analysis is impossible.'],
                    ['title' => 'Feed Wastage', 'desc' => 'Without tracking, farmers overfeed or underfeed, impacting FCR and profitability.'],
                    ['title' => 'Mortality Blind Spots', 'desc' => 'Delayed detection of health issues leads to preventable bird losses.'],
                ],
                'stats' => [
                    ['metric' => '30%', 'label' => 'Average feed cost reduction'],
                    ['metric' => '50%', 'label' => 'Less record-keeping time'],
                    ['metric' => '15%', 'label' => 'Mortality rate improvement'],
                    ['metric' => '2x', 'label' => 'Faster financial reporting'],
                ],
                'how_it_works' => [
                    ['step' => '01', 'title' => 'Setup Farm', 'desc' => 'Configure houses, flock types, and feed programs'],
                    ['step' => '02', 'title' => 'Daily Records', 'desc' => 'Log mortality, feed, eggs, and health events from your phone'],
                    ['step' => '03', 'title' => 'Monitor Performance', 'desc' => 'Track FCR, production curves, and costs in real-time'],
                    ['step' => '04', 'title' => 'Analyse & Optimise', 'desc' => 'Use reports to reduce costs and increase profitability'],
                ],
                'meta_title' => 'Poultry Management System — Atheris Limited',
                'meta_description' => 'End-to-end poultry farm management software. Track flocks, optimise feed, monitor health, manage finances, and scale your poultry business with data-driven insights.',
                'status' => 'published',
                'sort_order' => 2,
            ]
        );

        Product::updateOrCreate(
            ['slug' => 'career-portal'],
            [
                'title' => 'Career Portal',
                'slug' => 'career-portal',
                'tagline' => 'Attract the Best Talent. Hire with Confidence.',
                'description' => 'Your career page is often the first interaction candidates have with your brand. Atheris Career Portal gives organisations a polished, branded recruitment platform that streamlines the entire hiring journey — from job posting to offer letter.',
                'category' => 'HR Technology',
                'features' => [
                    ['title' => 'Branded Career Pages', 'desc' => 'Mobile-responsive career page matching your brand identity. No developer required.'],
                    ['title' => 'Job Management', 'desc' => 'Create and publish job listings with rich descriptions, requirements, and salary ranges.'],
                    ['title' => 'Applicant Tracking (ATS)', 'desc' => 'Visual pipeline boards to track candidates through each hiring stage.'],
                    ['title' => 'Screening & Assessments', 'desc' => 'Custom screening questions and built-in assessment tools to auto-filter candidates.'],
                    ['title' => 'Interview Scheduling', 'desc' => 'Integrated calendar with automatic email invitations and reminders.'],
                    ['title' => 'Hiring Analytics', 'desc' => 'Track time-to-hire, cost-per-hire, source effectiveness, and diversity metrics.'],
                ],
                'challenges' => [
                    ['title' => 'Disorganised Hiring', 'desc' => 'Email chains, shared spreadsheets, and WhatsApp groups lead to missed candidates.'],
                    ['title' => 'Slow Time-to-Hire', 'desc' => 'Average 45 days for mid-level roles due to manual processes.'],
                    ['title' => 'Poor Candidate Experience', 'desc' => '3 in 5 candidates abandon applications due to poor UX.'],
                ],
                'stats' => [
                    ['metric' => '67%', 'label' => 'of Nigerian companies lack structured hiring'],
                    ['metric' => '45 days', 'label' => 'Average time-to-hire for mid-level roles'],
                    ['metric' => '3 in 5', 'label' => 'Candidates abandon poor application experiences'],
                    ['metric' => '₦2.5M', 'label' => 'Average cost of a bad hire'],
                ],
                'how_it_works' => [
                    ['step' => '01', 'title' => 'Create Job', 'desc' => 'Post roles with descriptions, requirements, and salary ranges'],
                    ['step' => '02', 'title' => 'Receive Applications', 'desc' => 'Candidates apply through your branded career page'],
                    ['step' => '03', 'title' => 'Screen & Interview', 'desc' => 'Auto-filter, schedule interviews, and evaluate candidates'],
                    ['step' => '04', 'title' => 'Hire & Onboard', 'desc' => 'Send offer letters and transition to onboarding'],
                ],
                'meta_title' => 'Career Portal — Atheris Limited',
                'meta_description' => 'Modern recruitment platform with branded career pages, applicant tracking, assessment workflows, and hiring analytics. Built for African organisations scaling their teams.',
                'status' => 'published',
                'sort_order' => 3,
            ]
        );
    }
}
