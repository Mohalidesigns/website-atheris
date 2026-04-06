<x-app-layout metaTitle="Poultry Management System — Atheris Limited" metaDescription="End-to-end poultry farm management software. Track flocks, optimise feed, monitor health, manage finances, and scale your poultry business with data-driven insights.">
    {{-- Hero --}}
    <section class="bg-gradient-hero py-20 lg:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <a href="/software-solutions" class="inline-flex items-center gap-2 text-white/60 text-sm mb-6 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg> Software Solutions
                    </a>
                    <span class="inline-flex items-center gap-2 bg-white/10 text-white/90 text-sm font-medium px-4 py-2 rounded-full mb-6">Poultry Management System</span>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Run Your Farm<br><span class="text-accent">Like a Business.</span></h1>
                    <p class="text-lg text-white/70 mb-8 leading-relaxed">Nigeria's poultry industry is a multi-billion Naira sector, yet most farms still operate on notebooks and guesswork. Atheris PMS brings data-driven precision to every aspect of poultry farming — from day-old chick intake to final sales reconciliation — helping farmers increase productivity, reduce mortality, and maximise profitability.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">Request Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                        <a href="#features" class="inline-flex items-center justify-center gap-2 border-2 border-white/30 text-white font-semibold px-8 py-4 rounded-xl hover:border-white transition">See Features</a>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/10">
                        {{-- Placeholder 1: PMS Dashboard --}}
                        <div class="bg-white/5 rounded-xl aspect-[4/3] flex items-center justify-center text-white/20 border border-dashed border-white/10">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <p class="text-sm font-medium">Farm Dashboard</p>
                                <p class="text-xs mt-1">1200 x 900px</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="py-12 bg-white border-b border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach([
                    ['metric' => '30%', 'label' => 'Average feed cost reduction'],
                    ['metric' => '50%', 'label' => 'Less record-keeping time'],
                    ['metric' => '15%', 'label' => 'Mortality rate improvement'],
                    ['metric' => '2x', 'label' => 'Faster financial reporting'],
                ] as $stat)
                <div>
                    <div class="text-3xl font-extrabold text-primary mb-1">{{ $stat['metric'] }}</div>
                    <div class="text-sm text-text-secondary">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-20 bg-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-text-primary mb-4">Everything Your Farm Needs</h2>
                <p class="text-lg text-text-secondary max-w-2xl mx-auto">From broilers to layers to breeders, manage every aspect of your poultry operation from a single platform.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Flock Management', 'desc' => 'Track every batch from placement to depletion. Record daily mortality, culling, and transfers with automatic flock balance calculations. Support for broilers, layers, breeders, and pullets.', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                    ['title' => 'Feed Management', 'desc' => 'Record daily feed consumption per house, track feed conversion ratios (FCR), set optimal feeding schedules, and receive alerts when stock runs low. Compare feed costs across suppliers.', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                    ['title' => 'Health & Vaccination', 'desc' => 'Maintain vaccination schedules with automated reminders. Record treatments, medication dosages, and veterinary visits. Track disease incidents and mortality patterns for early intervention.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                    ['title' => 'Egg Production Tracking', 'desc' => 'Daily egg collection records by house, grade (jumbo, large, medium, small, crack), and hen-day production percentage. Track production curves against breed standards.', 'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
                    ['title' => 'Financial Management', 'desc' => 'Track all income and expenses by batch. Auto-calculate cost per bird, cost per kg, cost per egg, and profit margins. Generate profit & loss statements per batch or time period.', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Sales & Inventory', 'desc' => 'Manage customer orders, track sales by product type (live birds, dressed, eggs), generate invoices, and monitor receivables. Real-time inventory counts for feed, medications, and supplies.', 'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z'],
                    ['title' => 'Multi-Farm Dashboard', 'desc' => 'Manage multiple farm locations from a single account. Compare performance across farms, consolidate financials, and identify best-performing operations.', 'icon' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7'],
                    ['title' => 'Weather & Environment', 'desc' => 'Log temperature and humidity readings per house. Receive alerts when conditions fall outside optimal ranges. Correlate environmental data with production performance.', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                    ['title' => 'Reports & Analytics', 'desc' => 'Comprehensive reporting suite: batch performance, FCR trends, mortality analysis, production curves, financial summaries, and comparative analytics. Export to PDF and Excel.', 'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                ] as $feature)
                <div class="bg-white rounded-xl p-6 border border-border hover:shadow-md transition">
                    <div class="w-11 h-11 rounded-lg bg-secondary/10 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/></svg>
                    </div>
                    <h3 class="font-bold text-text-primary mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-text-secondary leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Screenshots --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-primary mb-4">Designed for Simplicity</h2>
                <p class="text-lg text-text-secondary">No farming software experience required. If you can use WhatsApp, you can use Atheris PMS.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                {{-- Placeholder 2: Flock Records --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                        <div class="text-center">
                            <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <p class="text-sm font-medium">Flock Records Screen</p>
                            <p class="text-xs mt-1">1200 x 900px</p>
                        </div>
                    </div>
                    <p class="text-sm text-text-secondary mt-4 text-center">Daily flock management with mortality tracking</p>
                </div>
                {{-- Placeholder 3: Financial Report --}}
                <div class="bg-bg rounded-2xl p-6 border border-border">
                    <div class="bg-white rounded-xl aspect-[4/3] flex items-center justify-center text-text-secondary/30 border border-dashed border-border">
                        <div class="text-center">
                            <svg class="w-14 h-14 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            <p class="text-sm font-medium">Financial Analytics</p>
                            <p class="text-xs mt-1">1200 x 900px</p>
                        </div>
                    </div>
                    <p class="text-sm text-text-secondary mt-4 text-center">Batch profitability and cost analysis dashboard</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 bg-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gradient-hero rounded-3xl p-12 lg:p-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Modernise Your Farm?</h2>
                <p class="text-lg text-white/70 mb-8">Whether you manage 500 birds or 500,000, Atheris PMS scales with your operation.</p>
                <a href="/demo" class="inline-flex items-center justify-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition-all shadow-lg">
                    Request a Demo <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
