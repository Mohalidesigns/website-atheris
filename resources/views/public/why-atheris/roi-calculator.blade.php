<x-app-layout metaTitle="ROI Calculator — Atheris GRC">
    <section class="bg-gradient-hero py-20"><div class="max-w-7xl mx-auto px-4 text-center"><h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Calculate Your <span class="text-accent">GRC Savings</span></h1><p class="text-lg text-white/70 max-w-2xl mx-auto">See how much time and money Atheris can save your institution.</p></div></section>

    <section class="py-20 bg-bg" x-data="{ employees: 50, modules: 3, manual_hours: 20, get savings() { return this.employees * this.modules * this.manual_hours * 800; }, get time_saved() { return Math.round(this.employees * this.manual_hours * 0.6); } }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl p-10 border border-border shadow-lg">
                <h2 class="text-2xl font-bold text-text-primary mb-8">Enter Your Details</h2>
                <div class="space-y-8 mb-10">
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-2">Number of GRC staff: <span class="text-accent font-bold" x-text="employees"></span></label>
                        <input type="range" min="5" max="500" step="5" x-model="employees" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-accent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-2">GRC modules needed: <span class="text-accent font-bold" x-text="modules"></span></label>
                        <input type="range" min="1" max="6" step="1" x-model="modules" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-accent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-text-primary mb-2">Hours/week on manual GRC: <span class="text-accent font-bold" x-text="manual_hours"></span></label>
                        <input type="range" min="5" max="60" step="5" x-model="manual_hours" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-accent">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 pt-8 border-t border-border">
                    <div class="bg-secondary/5 rounded-xl p-6 text-center">
                        <div class="text-sm text-text-secondary mb-2">Estimated Annual Savings</div>
                        <div class="text-3xl font-extrabold text-secondary">₦<span x-text="savings.toLocaleString()">0</span></div>
                    </div>
                    <div class="bg-accent/5 rounded-xl p-6 text-center">
                        <div class="text-sm text-text-secondary mb-2">Hours Saved Per Year</div>
                        <div class="text-3xl font-extrabold text-accent"><span x-text="(time_saved * 52).toLocaleString()">0</span> hrs</div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <a href="/demo" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-light text-white font-bold px-8 py-4 rounded-xl transition shadow-lg">Get a Detailed ROI Analysis</a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
