<x-filament-panels::page>
    @php
        $examples = [
            'hero_illustration' => [
                'title' => 'Hero preview',
                'description' => 'A larger illustration suited for landing pages or onboarding screens.',
            ],
            'compact_illustration' => [
                'title' => 'Compact preview',
                'description' => 'A smaller preset that works well in cards, alerts, and empty states.',
            ],
        ];
    @endphp

    <div class="grid gap-6">
        <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <h2 class="text-2xl font-semibold tracking-tight text-slate-950">Filament Undraw Demo</h2>
            <p class="mt-2 max-w-3xl text-sm text-slate-600">
                This page is shipped by the package so you can verify the field inside a real Filament panel before wiring it into a resource or custom page.
            </p>
        </section>

        {{ $this->content }}

        <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="grid gap-4 lg:grid-cols-2">
                @foreach ($examples as $key => $example)
                    @php
                        $selectedIllustration = data_get($this->data, $key);
                    @endphp

                    <article class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <div>
                            <h3 class="text-base font-semibold text-slate-950">{{ $example['title'] }}</h3>
                            <p class="mt-1 text-sm text-slate-600">{{ $example['description'] }}</p>
                        </div>

                        <div class="mt-4 flex min-h-72 items-center justify-center rounded-2xl border border-dashed border-slate-300 bg-white p-4">
                            @if (filled($selectedIllustration))
                                <img
                                    src="{{ $selectedIllustration }}"
                                    alt="Selected unDraw illustration"
                                    class="max-h-64 w-full object-contain"
                                />
                            @else
                                <p class="max-w-xs text-center text-sm text-slate-500">
                                    Search and select an illustration above to preview it here.
                                </p>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
</x-filament-panels::page>