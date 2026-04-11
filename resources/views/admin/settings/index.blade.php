<x-admin-layout title="Settings">
    <h2 class="text-xl font-bold mb-6">Site Settings</h2>
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">@csrf @method('PUT')
        @foreach($settings as $group => $items)
        <div class="bg-white rounded-xl border border-border p-6">
            <h3 class="font-semibold text-text-primary mb-4 capitalize">{{ $group }}</h3>
            <div class="space-y-4">
                @foreach($items as $setting)
                <div>
                    <label class="block text-sm font-medium text-text-primary mb-1.5">{{ ucwords(str_replace('_', ' ', $setting->key)) }}</label>

                    @if($setting->type === 'toggle')
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="hidden" name="{{ $setting->key }}" value="0">
                            <input type="checkbox" name="{{ $setting->key }}" value="1" {{ $setting->value ? 'checked' : '' }} class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            <span class="ml-3 text-sm text-text-secondary">{{ $setting->value ? 'Enabled' : 'Disabled' }}</span>
                        </label>

                    @elseif($setting->type === 'image')
                        @if($setting->value)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $setting->value) }}" alt="{{ $setting->key }}" class="h-16 rounded-lg border border-border">
                            </div>
                        @endif
                        <input type="file" name="{{ $setting->key }}" accept="image/*" class="w-full text-sm text-text-secondary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">

                    @elseif($setting->type === 'textarea')
                        <textarea name="{{ $setting->key }}" rows="4" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm font-mono">{{ $setting->value }}</textarea>

                    @else
                        <input type="text" name="{{ $setting->key }}" value="{{ $setting->value }}" class="w-full px-4 py-3 rounded-lg border border-border focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-sm">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        <button type="submit" class="bg-primary hover:bg-primary-light text-white font-semibold px-6 py-3 rounded-lg transition">Save Settings</button>
    </form>
</x-admin-layout>
