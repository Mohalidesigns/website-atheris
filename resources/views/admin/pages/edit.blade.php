<x-admin-layout title="Edit {{ $groupLabel }}">
    <div class="max-w-3xl">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold">Edit: {{ $groupLabel }}</h2>
            <a href="{{ route('admin.pages.index') }}" class="text-sm text-text-secondary hover:text-primary">&larr; Back to Pages</a>
        </div>

        <form action="{{ route('admin.pages.update', $group) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf @method('PUT')
            <div class="bg-white rounded-xl border border-border p-6 space-y-5">
                @foreach($settings as $setting)
                @if($setting->type === 'json')
                    @continue
                @endif
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">
                        {{ ucwords(str_replace('_', ' ', preg_replace('/^(homepage_|page_\w+?_)/', '', $setting->key))) }}
                    </label>

                    @if($setting->type === 'toggle')
                        <label class="relative inline-flex items-center cursor-pointer" x-data="{ on: {{ $setting->value ? 'true' : 'false' }} }">
                            <input type="hidden" name="{{ $setting->key }}" :value="on ? '1' : '0'">
                            <button type="button" @click="on = !on" :class="on ? 'bg-secondary' : 'bg-gray-300'" class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors">
                                <span :class="on ? 'translate-x-6' : 'translate-x-1'" class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform"></span>
                            </button>
                            <span class="ml-3 text-sm text-text-secondary" x-text="on ? 'Enabled' : 'Disabled'"></span>
                        </label>

                    @elseif($setting->type === 'image')
                        <div x-data="{ removeImage: false }">
                            @if($setting->value)
                            <div class="mb-2 flex items-center gap-3" x-show="!removeImage">
                                <img src="{{ asset('storage/' . $setting->value) }}" alt="{{ $setting->key }}" class="h-20 rounded-lg border border-border">
                                <button type="button" @click="removeImage = true" class="text-xs text-error hover:text-error/80 font-medium">Remove Image</button>
                            </div>
                            <input type="hidden" name="remove_image_{{ $setting->key }}" x-bind:value="removeImage ? '1' : '0'">
                            @endif
                            <input type="file" name="{{ $setting->key }}" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                        </div>

                    @elseif($setting->type === 'textarea')
                        <textarea name="{{ $setting->key }}" rows="4" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm resize-y">{{ $setting->value }}</textarea>

                    @else
                        <input type="text" name="{{ $setting->key }}" value="{{ $setting->value }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    @endif
                </div>
                @endforeach
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Save Changes</button>
                <a href="{{ route('admin.pages.index') }}" class="bg-white border border-border text-text-secondary font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
