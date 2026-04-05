<x-admin-layout title="Edit Solution">
    <div class="max-w-4xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Edit: {{ $solution->title }}</h2>
            <a href="{{ route('admin.solutions.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Solutions</a>
        </div>
        <form action="{{ route('admin.solutions.update', $solution) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')
            {{-- Basic Info --}}
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <h3 class="font-semibold text-text-primary">Basic Information</h3>
                <div><label class="block text-sm font-medium mb-1.5">Title *</label><input type="text" name="title" value="{{ $solution->title }}" required class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"></div>
                <div><label class="block text-sm font-medium mb-1.5">Slug</label><p class="text-sm text-text-secondary bg-gray-50 px-4 py-3 rounded-lg border border-border">/solutions/{{ $solution->slug }}</p></div>
                <div><label class="block text-sm font-medium mb-1.5">Tagline</label><input type="text" name="tagline" value="{{ $solution->tagline }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"></div>
                <div><label class="block text-sm font-medium mb-1.5">Icon</label><input type="text" name="icon" value="{{ $solution->icon }}" placeholder="e.g. clipboard-check, shield" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"><p class="text-xs text-text-secondary mt-1">Available: clipboard-check, shield, settings, check-circle, alert-triangle, refresh-cw</p></div>
                <div><label class="block text-sm font-medium mb-1.5">Description</label><textarea name="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">{{ $solution->description }}</textarea></div>
                <div x-data="{ removeImage: false }">
                    <label class="block text-sm font-medium mb-1.5">Hero Image / Screenshot</label>
                    @if($solution->hero_image)
                    <div class="mb-2 flex items-center gap-3" x-show="!removeImage">
                        <img src="{{ asset('storage/' . $solution->hero_image) }}" alt="{{ $solution->title }}" class="h-20 rounded-lg border border-border">
                        <button type="button" @click="removeImage = true" class="text-xs text-error hover:text-error/80 font-medium">Remove Image</button>
                    </div>
                    <input type="hidden" name="remove_hero_image" :value="removeImage ? '1' : '0'">
                    @endif
                    <input type="file" name="hero_image" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div><label class="block text-sm font-medium mb-1.5">Status</label><select name="status" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"><option value="draft" {{ $solution->status === 'draft' ? 'selected' : '' }}>Draft</option><option value="published" {{ $solution->status === 'published' ? 'selected' : '' }}>Published</option></select></div>
                    <div><label class="block text-sm font-medium mb-1.5">Sort Order</label><input type="number" name="sort_order" value="{{ $solution->sort_order }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"></div>
                </div>
            </div>

            {{-- Features --}}
            <div class="bg-white rounded-xl border border-border p-6" x-data="{ features: {{ json_encode($solution->features ?: [['title' => '', 'desc' => '', 'icon' => '']]) }} }">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-text-primary">Features</h3>
                    <button type="button" @click="features.push({ title: '', desc: '', icon: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add Feature</button>
                </div>
                <template x-for="(feature, index) in features" :key="index">
                    <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                        <input :name="'features['+index+'][title]'" x-model="feature.title" placeholder="Feature title" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <input :name="'features['+index+'][desc]'" x-model="feature.desc" placeholder="Description" class="col-span-5 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <input :name="'features['+index+'][icon]'" x-model="feature.icon" placeholder="Icon" class="col-span-2 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <button type="button" @click="features.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                    </div>
                </template>
            </div>

            {{-- Challenges --}}
            <div class="bg-white rounded-xl border border-border p-6" x-data="{ challenges: {{ json_encode($solution->challenges ?: [['title' => '', 'desc' => '']]) }} }">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-text-primary">Challenges</h3>
                    <button type="button" @click="challenges.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add Challenge</button>
                </div>
                <template x-for="(challenge, index) in challenges" :key="index">
                    <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                        <input :name="'challenges['+index+'][title]'" x-model="challenge.title" placeholder="Challenge title" class="col-span-5 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <input :name="'challenges['+index+'][desc]'" x-model="challenge.desc" placeholder="Description" class="col-span-6 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <button type="button" @click="challenges.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                    </div>
                </template>
            </div>

            {{-- How It Works --}}
            <div class="bg-white rounded-xl border border-border p-6" x-data="{ steps: {{ json_encode($solution->how_it_works ?: [['step' => 1, 'title' => '', 'desc' => '']]) }} }">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-text-primary">How It Works</h3>
                    <button type="button" @click="steps.push({ step: steps.length + 1, title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add Step</button>
                </div>
                <template x-for="(step, index) in steps" :key="index">
                    <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                        <input :name="'how_it_works['+index+'][step]'" x-model="step.step" type="number" placeholder="#" class="col-span-1 px-3 py-2.5 rounded-lg border border-border outline-none text-sm text-center">
                        <input :name="'how_it_works['+index+'][title]'" x-model="step.title" placeholder="Step title" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <input :name="'how_it_works['+index+'][desc]'" x-model="step.desc" placeholder="Description" class="col-span-6 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <button type="button" @click="steps.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                    </div>
                </template>
            </div>

            {{-- ROI Metrics --}}
            <div class="bg-white rounded-xl border border-border p-6" x-data="{ metrics: {{ json_encode($solution->roi_metrics ?: [['metric' => '', 'label' => '']]) }} }">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-text-primary">ROI Metrics</h3>
                    <button type="button" @click="metrics.push({ metric: '', label: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add Metric</button>
                </div>
                <template x-for="(m, index) in metrics" :key="index">
                    <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                        <input :name="'roi_metrics['+index+'][metric]'" x-model="m.metric" placeholder="e.g. 60%" class="col-span-3 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <input :name="'roi_metrics['+index+'][label]'" x-model="m.label" placeholder="Label" class="col-span-8 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                        <button type="button" @click="metrics.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                    </div>
                </template>
            </div>

            {{-- ============================================================ --}}
            {{-- EXTENDED PAGE CONTENT (for custom solution pages)             --}}
            {{-- ============================================================ --}}
            @php $pc = $solution->page_content ?? []; @endphp

            <div class="border-t-2 border-accent/30 pt-6">
                <div class="flex items-center gap-3 mb-6">
                    <span class="inline-block bg-accent/10 text-accent text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Extended Content</span>
                    <p class="text-sm text-text-secondary">These sections power the custom detail page (e.g. audit-management).</p>
                </div>

                {{-- Product Screenshots --}}
                <div class="bg-white rounded-xl border border-border p-6 space-y-5 mb-6">
                    <h3 class="font-semibold text-text-primary">Product Screenshots</h3>
                    <p class="text-xs text-text-secondary -mt-3">These images appear in the solution detail page sections.</p>
                    @php
                        $ss = $solution->screenshots ?? [];
                        $screenshotFields = match($solution->slug) {
                            'enterprise-risk-management' => [
                                ['dashboard', 'Command Centre Dashboard', 'Main ERM command centre shown in the hero and dashboard section'],
                                ['simulation', 'Monte Carlo Simulation', 'Screenshot for the Monte Carlo Simulation section'],
                                ['heatmap', 'Risk Heatmap', 'Screenshot for the Risk Heatmap & Analysis section'],
                            ],
                            default => [
                                ['dashboard', 'Dashboard (Hero)', 'Main dashboard shown in the hero section'],
                                ['work_programs', 'Work Programs', 'Screenshot for the Work Programs & Fieldwork section'],
                                ['risk', 'Risk Management', 'Screenshot for the Risk Management section'],
                                ['compliance', 'Regulatory Compliance', 'Screenshot for the Compliance Frameworks section'],
                            ],
                        };
                    @endphp
                    @foreach($screenshotFields as $shot)
                    <div x-data="{ remove: false }">
                        <label class="block text-sm font-medium mb-1.5">{{ $shot[1] }}</label>
                        <p class="text-xs text-text-secondary mb-2">{{ $shot[2] }}</p>
                        @if(!empty($ss[$shot[0]]))
                        <div class="mb-2 flex items-center gap-3" x-show="!remove">
                            <img src="{{ asset('storage/' . $ss[$shot[0]]) }}" alt="{{ $shot[1] }}" class="h-16 rounded-lg border border-border">
                            <button type="button" @click="remove = true" class="text-xs text-error hover:text-error/80 font-medium">Remove</button>
                        </div>
                        <input type="hidden" name="remove_screenshot_{{ $shot[0] }}" :value="remove ? '1' : '0'">
                        @endif
                        <input type="file" name="screenshot_{{ $shot[0] }}" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                    </div>
                    @endforeach
                </div>

                {{-- Selling Points --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['selling_points'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Selling Points <span class="text-xs text-text-secondary font-normal">(Why ThirdLine section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[selling_points]['+index+'][title]'" x-model="item.title" placeholder="Title (e.g. Unmatched Efficiency)" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <textarea :name="'page_content[selling_points]['+index+'][desc]'" x-model="item.desc" placeholder="Description" rows="2" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm resize-none"></textarea>
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Lifecycle Phases --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['lifecycle_phases'] ?? [['step' => 1, 'title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Lifecycle Phases <span class="text-xs text-text-secondary font-normal">(Audit Lifecycle section)</span></h3>
                        <button type="button" @click="items.push({ step: items.length + 1, title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[lifecycle_phases]['+index+'][step]'" x-model="item.step" type="number" placeholder="#" class="col-span-1 px-3 py-2.5 rounded-lg border border-border outline-none text-sm text-center">
                            <input :name="'page_content[lifecycle_phases]['+index+'][title]'" x-model="item.title" placeholder="Phase title" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[lifecycle_phases]['+index+'][desc]'" x-model="item.desc" placeholder="Description" class="col-span-6 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Work Programs --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['work_programs'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Work Program Templates <span class="text-xs text-text-secondary font-normal">(Fieldwork section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[work_programs]['+index+'][title]'" x-model="item.title" placeholder="e.g. Branch Audit" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[work_programs]['+index+'][desc]'" x-model="item.desc" placeholder="e.g. 15+ templates — cash management, teller ops..." class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Finding Types --}}
                <div class="bg-white rounded-xl border border-border p-6 space-y-3 mb-6">
                    <h3 class="font-semibold text-text-primary">Finding Types <span class="text-xs text-text-secondary font-normal">(Findings section tags)</span></h3>
                    <p class="text-xs text-text-secondary">One per line.</p>
                    <textarea name="page_content[finding_types]" rows="5" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Control Deficiency&#10;Compliance Gap&#10;Fraud">{{ implode("\n", $pc['finding_types'] ?? []) }}</textarea>
                </div>

                {{-- AI Capabilities --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['ai_capabilities'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">AI Capabilities <span class="text-xs text-text-secondary font-normal">(AI Intelligence section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[ai_capabilities]['+index+'][title]'" x-model="item.title" placeholder="e.g. Report Draft Generation" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[ai_capabilities]['+index+'][desc]'" x-model="item.desc" placeholder="Description" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Risk Management Features --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['risk_features'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Risk Management Features <span class="text-xs text-text-secondary font-normal">(Risk section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[risk_features]['+index+'][title]'" x-model="item.title" placeholder="e.g. Risk Register" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[risk_features]['+index+'][desc]'" x-model="item.desc" placeholder="Description" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Compliance Frameworks --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['compliance_frameworks'] ?? [['name' => '', 'category' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Compliance Frameworks <span class="text-xs text-text-secondary font-normal">(Regulatory section)</span></h3>
                        <button type="button" @click="items.push({ name: '', category: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[compliance_frameworks]['+index+'][name]'" x-model="item.name" placeholder="e.g. ISO 27001" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[compliance_frameworks]['+index+'][category]'" x-model="item.category" placeholder="e.g. Information Security" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Report Workflow --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['report_workflow'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Report Workflow Steps <span class="text-xs text-text-secondary font-normal">(Reporting section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[report_workflow]['+index+'][title]'" x-model="item.title" placeholder="e.g. Draft" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[report_workflow]['+index+'][desc]'" x-model="item.desc" placeholder="e.g. Author creates" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Committee Features --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['committee_features'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Committee Portal Features <span class="text-xs text-text-secondary font-normal">(Governance section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[committee_features]['+index+'][title]'" x-model="item.title" placeholder="e.g. Dedicated Committee Dashboard" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[committee_features]['+index+'][desc]'" x-model="item.desc" placeholder="Description" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Role Hierarchy --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['role_hierarchy'] ?? [['title' => '', 'desc' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">Role Hierarchy <span class="text-xs text-text-secondary font-normal">(Security section)</span></h3>
                        <button type="button" @click="items.push({ title: '', desc: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[role_hierarchy]['+index+'][title]'" x-model="item.title" placeholder="e.g. Super Admin" class="col-span-4 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[role_hierarchy]['+index+'][desc]'" x-model="item.desc" placeholder="e.g. Full system configuration, user management" class="col-span-7 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>

                {{-- Security Features --}}
                <div class="bg-white rounded-xl border border-border p-6 space-y-3 mb-6">
                    <h3 class="font-semibold text-text-primary">Security Features <span class="text-xs text-text-secondary font-normal">(Security section list)</span></h3>
                    <p class="text-xs text-text-secondary">One per line.</p>
                    <textarea name="page_content[security_features]" rows="5" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm" placeholder="Role-based access control (RBAC)&#10;Immutable activity logs&#10;Digital signatures">{{ implode("\n", $pc['security_features'] ?? []) }}</textarea>
                </div>

                {{-- At a Glance Stats --}}
                <div class="bg-white rounded-xl border border-border p-6 mb-6" x-data="{ items: {{ json_encode($pc['glance_stats'] ?? [['metric' => '', 'label' => '']]) }} }">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-text-primary">At a Glance Stats <span class="text-xs text-text-secondary font-normal">(Summary infographic)</span></h3>
                        <button type="button" @click="items.push({ metric: '', label: '' })" class="text-xs text-primary font-medium hover:text-accent">+ Add</button>
                    </div>
                    <template x-for="(item, index) in items" :key="index">
                        <div class="grid grid-cols-12 gap-3 mb-3 items-start">
                            <input :name="'page_content[glance_stats]['+index+'][metric]'" x-model="item.metric" placeholder="e.g. 50+" class="col-span-3 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <input :name="'page_content[glance_stats]['+index+'][label]'" x-model="item.label" placeholder="e.g. Work Program Templates" class="col-span-8 px-3 py-2.5 rounded-lg border border-border outline-none text-sm">
                            <button type="button" @click="items.splice(index, 1)" class="col-span-1 text-error hover:text-error/80 text-sm py-2.5 text-center">&times;</button>
                        </div>
                    </template>
                </div>
            </div>

            {{-- SEO --}}
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                <h3 class="font-semibold text-text-primary">SEO Settings</h3>
                <div><label class="block text-sm font-medium mb-1.5">Meta Title</label><input type="text" name="meta_title" value="{{ $solution->meta_title }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm"></div>
                <div><label class="block text-sm font-medium mb-1.5">Meta Description</label><textarea name="meta_description" rows="2" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-none">{{ $solution->meta_description }}</textarea></div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Update Solution</button>
                <a href="{{ route('admin.solutions.index') }}" class="bg-white border border-border text-text-secondary font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
