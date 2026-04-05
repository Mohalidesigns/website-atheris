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

                    @if($setting->type === 'image')
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
