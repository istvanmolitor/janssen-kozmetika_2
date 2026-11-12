<x-layout
    title="Impresszum — Janssen Kozmetika"
    description="A Janssen Kozmetika weboldalának impresszuma, szolgáltatói adatai."
>
    <section class="section max-w-3xl">
        <x-section-heading eyebrow="Jogi tartalom" title="Impresszum" />

        <div class="mt-4 rounded-2xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800">
            <p>
                <strong>Figyelem:</strong> ez egy sablon impresszum, amely még nem tartalmazza a vállalkozás pontos,
                hivatalos nyilvántartási adatait. Közzététel előtt kérjük, egyeztessenek könyvelővel/jogi
                szakértővel, és töltsék ki a hiányzó, szögletes zárójelben jelölt adatokat.
            </p>
        </div>

        <div class="mt-8 space-y-6 text-sm leading-relaxed text-silver-700">
            <div>
                <h2 class="text-base font-semibold text-silver-900">Szolgáltató adatai</h2>
                <ul class="mt-2 space-y-1">
                    <li>Név: {{ config('salon.owner') }} (Janssen Kozmetika)</li>
                    <li>Székhely / tevékenység végzésének helye: {{ config('salon.address') }}</li>
                    <li>Adószám: [adószám kitöltendő]</li>
                    <li>Nyilvántartási szám (egyéni vállalkozói nyilvántartás): [nyilvántartási szám kitöltendő]</li>
                    <li>Telefon: {{ config('salon.phone') }}</li>
                    <li>Email: {{ config('salon.email') }}</li>
                </ul>
            </div>

            <div>
                <h2 class="text-base font-semibold text-silver-900">Tárhelyszolgáltató</h2>
                <p class="mt-2">[Tárhelyszolgáltató neve és elérhetősége kitöltendő]</p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-silver-900">Jogi nyilatkozat</h2>
                <p class="mt-2">
                    A weboldalon található tartalmak kizárólag tájékoztató jellegűek, nem minősülnek orvosi
                    tanácsadásnak. A feltüntetett árak irányárak, a végleges árlista egyeztetés alatt áll.
                </p>
            </div>
        </div>
    </section>
</x-layout>
