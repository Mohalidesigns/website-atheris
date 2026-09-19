@php
$industries = [
    'banks' => ['title' => 'Commercial Banks', 'desc' => 'Enterprise GRC for Tier-1 and Tier-2 Nigerian commercial banks.', 'challenges' => ['CBN examination readiness', 'BOFIA 2020 compliance', 'Basel III/IV alignment']],
    'microfinance' => ['title' => 'Microfinance Banks', 'desc' => 'Affordable GRC for microfinance institutions across Nigeria.', 'challenges' => ['Limited compliance resources', 'CBN licensing requirements', 'Operational risk management']],
    'insurance' => ['title' => 'Insurance Companies', 'desc' => 'GRC solutions for Nigerian insurance firms and brokers.', 'challenges' => ['NAICOM compliance', 'Claims risk management', 'Solvency requirements']],
    'capital-markets' => ['title' => 'Capital Markets', 'desc' => 'GRC for asset managers, stockbrokers, and investment firms.', 'challenges' => ['SEC compliance', 'Market risk management', 'AML/CFT obligations']],
];
$industry = $industries[$slug] ?? ['title' => 'Industry Solutions', 'desc' => 'GRC solutions for your industry.', 'challenges' => []];
@endphp
<x-app-layout :metaTitle="$industry['title'] . ' — Atheris GRC'">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">{{ $industry['title'] }}</h1><p class="text-lg text-white/70 max-w-2xl mx-auto">{{ $industry['desc'] }}</p></div></section>
    <section class="py-20 bg-white"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(!empty($industry['challenges']))
        <div class="mb-16"><h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Key Challenges We Solve</h2>
        <div class="grid md:grid-cols-3 gap-6">@foreach($industry['challenges'] as $c)<div class="bg-bg rounded-xl p-6 border border-border text-center"><div class="w-12 h-12 bg-error/10 rounded-lg flex items-center justify-center mx-auto mb-4"><svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div><p class="font-semibold text-text-primary">{{ $c }}</p></div>@endforeach
        </div></div>
        @endif
        <h2 class="text-2xl font-bold text-text-primary mb-8 text-center">Recommended Modules</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($solutions as $s)
            <a href="/solutions/{{ $s->slug }}" class="group bg-bg rounded-xl p-6 border border-border hover:border-primary/20 hover:shadow-md transition"><h3 class="font-bold text-text-primary group-hover:text-primary transition mb-2">{{ $s->title }}</h3><p class="text-sm text-text-secondary line-clamp-2">{{ $s->description }}</p></a>
            @endforeach
        </div>
        <div class="text-center mt-12"><a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl shadow-lg transition">Request a Demo</a></div>
    </div></section>

    @php
        $faqsByIndustry = [
            'banks' => [
                ['q' => "What is GRC software for Nigerian banks?", 'a' => "GRC software for Nigerian banks unifies governance, risk and compliance — audit, risk, controls and regulatory obligations — in one system. Atheris is built for commercial banks under CBN and BOFIA oversight, helping them evidence compliance and manage risk from a single platform."],
                ['q' => "How does Atheris help banks with CBN examinations?", 'a' => "Atheris lets banks organise controls, risks and compliance obligations against CBN requirements and produce examiner-ready reports. Keeping evidence in one auditable system helps banks prepare for Central Bank of Nigeria supervisory examinations with less manual effort."],
                ['q' => "Does Atheris support BOFIA 2020 for banks?", 'a' => "Yes. The Banks and Other Financial Institutions Act (BOFIA) 2020 sets governance and prudential obligations for Nigerian banks. Atheris helps banks capture these obligations, link them to controls and reporting, and maintain an auditable compliance record."],
                ['q' => "Is Atheris suitable for Tier-1 and Tier-2 banks?", 'a' => "Atheris is built for Nigerian commercial banks of different sizes, from larger Tier-1 institutions to Tier-2 banks. The platform scales GRC processes — audit, risk, control and compliance — to the institution's structure and regulatory footprint."],
            ],
            'microfinance' => [
                ['q' => "What is GRC software for microfinance banks?", 'a' => "GRC software helps microfinance banks manage compliance, risk and controls in one system. Atheris is built for Nigerian microfinance banks (MFBs) operating under CBN licensing and supervision, replacing manual processes with a structured, auditable platform."],
                ['q' => "How does Atheris help MFBs with limited compliance resources?", 'a' => "Microfinance banks often have small compliance teams. Atheris centralises obligations, controls and evidence so a lean team can track CBN requirements, manage risk and prepare for examinations without maintaining multiple spreadsheets."],
                ['q' => "Does Atheris support CBN requirements for microfinance banks?", 'a' => "Yes. Atheris is built around Nigerian regulation, so microfinance banks can record CBN licensing and prudential obligations, link them to controls and tasks, and evidence compliance in one system during supervisory reviews."],
                ['q' => "Is Atheris affordable for microfinance banks?", 'a' => "Atheris is designed to bring enterprise-grade GRC to institutions of different sizes, including microfinance banks. Pricing is discussed directly so MFBs can adopt structured governance, risk and compliance suited to their scale — request a demo to discuss."],
            ],
            'insurance' => [
                ['q' => "What is GRC software for insurance companies?", 'a' => "GRC software helps insurers manage governance, risk, controls and compliance in one system. Atheris is built for Nigerian insurance firms and brokers under NAICOM supervision, supporting risk management, claims-related risk and regulatory compliance."],
                ['q' => "Does Atheris support NAICOM compliance?", 'a' => "Atheris helps insurers record and track obligations relevant to the National Insurance Commission (NAICOM), linking them to controls and evidence. This supports insurance firms in demonstrating regulatory compliance from a single auditable platform."],
                ['q' => "Can Atheris help with risk management for insurers?", 'a' => "Atheris provides enterprise risk management that insurers can use to document risks, controls and treatment actions, supporting sound risk governance. This complements the prudential and solvency expectations insurers manage under NAICOM."],
                ['q' => "Is Atheris suitable for insurance brokers?", 'a' => "Yes. Atheris serves Nigerian insurance companies and brokers, giving both a structured way to manage compliance, risk and controls. Brokers can track regulatory obligations and governance activities in the same GRC platform used by insurers."],
            ],
            'capital-markets' => [
                ['q' => "What is GRC software for capital market operators?", 'a' => "GRC software helps capital market firms manage compliance, risk and controls in one system. Atheris is built for Nigerian asset managers, stockbrokers and investment firms under SEC oversight, supporting regulatory compliance and market-risk governance."],
                ['q' => "Does Atheris support SEC Nigeria compliance?", 'a' => "Atheris helps capital market operators record obligations relevant to the Securities and Exchange Commission (SEC) Nigeria, link them to controls and evidence, and track compliance status, supporting readiness for regulatory reviews."],
                ['q' => "Can Atheris help with AML/CFT obligations for capital markets?", 'a' => "Yes. Capital market operators carry anti-money-laundering and combating-the-financing-of-terrorism obligations. Atheris helps document and monitor AML/CFT requirements alongside broader compliance within one GRC platform."],
                ['q' => "Does Atheris support market risk management?", 'a' => "Atheris provides enterprise risk management that capital market firms can use to document and monitor market, operational and compliance risks, with controls and treatment actions tracked in one auditable system."],
            ],
        ];
        $faqs = $faqsByIndustry[$slug] ?? [];
    @endphp
    <x-faq :items="$faqs" title="{{ $industry['title'] }} — FAQs" />
</x-app-layout>
