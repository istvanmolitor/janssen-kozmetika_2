<x-layout
    title="Galéria — Janssen Kozmetika Siófok"
    description="Pillantás a siófoki Janssen Kozmetika szalonjába és kezeléseibe. A képek helykitöltők, hamarosan valódi fotókkal frissülnek."
>
    <section class="section">
        <x-section-heading
            eyebrow="Galéria"
            title="Pillantás a szalonba"
            description="Az alábbi képek helykitöltők — hamarosan valódi fotókkal mutatjuk meg szalonunkat és kezeléseinket."
        />

        <div class="mt-6 flex items-start gap-3 rounded-2xl border border-silver-200 bg-silver-50 p-4 text-sm text-silver-600">
            <x-icon name="camera" class="mt-0.5 size-5 shrink-0 text-brand-500" />
            <p>Ez a galéria jelenleg helykitöltő képekkel működik — valódi szalon- és kezelésfotókra lesz cserélve.</p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @php $variants = ['light', 'brand', 'silver']; @endphp
            @foreach (config('salon.gallery_placeholders') as $index => $item)
                <x-placeholder-image
                    :label="$item['label']"
                    :variant="$variants[$index % count($variants)]"
                    aspect="aspect-square"
                />
            @endforeach
        </div>
    </section>
</x-layout>
