<x-layout
    title="Szolgáltatások — Janssen Kozmetika Siófok"
    description="Arckezelések, tisztító kezelések, speciális Janssen Cosmetics kezelések és szemöldök-szempilla szolgáltatások Siófokon, a Janssen Kozmetikában."
>
    <section class="section">
        <x-section-heading
            eyebrow="Szolgáltatások"
            title="Kezeléseink és irányáraink"
            description="Az alábbi kategóriákba rendezett kínálatból választhat. Minden kezelés bőrtípusra és igényre szabható — a pontos javaslatért keressen minket."
        />

        <div class="mt-6 flex items-start gap-3 rounded-2xl border border-brand-200 bg-brand-50 p-4 text-sm text-brand-700">
            <x-icon name="sparkle" class="mt-0.5 size-5 shrink-0" />
            <p>
                A feltüntetett árak <strong>irányárak</strong>, a végleges árlista egyeztetés alatt áll Molitor Lindával.
                A pontos, aktuális árakról kérjük, érdeklődjön telefonon vagy emailben.
            </p>
        </div>

        <div class="mt-14 space-y-16">
            @foreach (config('salon.service_categories') as $category)
                <div id="{{ $category['key'] }}">
                    <div class="max-w-2xl">
                        <h2 class="text-2xl font-bold tracking-tight text-silver-900">{{ $category['title'] }}</h2>
                        <p class="mt-2 text-silver-600">{{ $category['description'] }}</p>
                    </div>
                    <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($category['services'] as $service)
                            <x-service-card :service="$service" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-16 rounded-3xl bg-silver-50 p-8 text-center sm:p-12">
            <h2 class="text-2xl font-bold text-silver-900">Nem biztos, melyik kezelés illik Önhöz?</h2>
            <p class="mx-auto mt-3 max-w-xl text-silver-600">
                Hívjon minket, vagy írjon üzenetet — személyesen segítünk kiválasztani a bőrének leginkább megfelelő kezelést.
            </p>
            <x-cta-buttons class="mt-6 justify-center" />
        </div>
    </section>
</x-layout>
