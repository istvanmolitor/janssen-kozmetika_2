<x-layout
    title="Janssen Kozmetika — Prémium kozmetikai szalon Siófokon"
    description="A Janssen Kozmetika Siófok szívében, a Fő téren várja vendégeit Janssen Cosmetics professzionális svájci/német kezelésekkel. Foglaljon időpontot Molitor Lindánál."
>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-brand-700 via-brand-600 to-brand-400 text-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(255,255,255,0.18),_transparent_55%)]"></div>
        <div class="section relative grid gap-12 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="eyebrow text-brand-100">Janssen Cosmetics partnerszalon &middot; Siófok</p>
                <h1 class="mt-3 text-4xl font-bold tracking-tight sm:text-5xl">
                    Prémium bőrápolás, nyugodt, klinikai-spa hangulatban
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-brand-50">
                    A Janssen Kozmetikában Molitor Linda személyre szabott arckezelésekkel és a svájci/német
                    Janssen Cosmetics professzionális termékcsaláddal gondozza bőrét Siófok Fő terén.
                </p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ config('salon.phone_href') }}" class="btn bg-white text-brand-700 hover:bg-brand-50">
                        <x-icon name="phone" class="size-4" />
                        Hívjon most
                    </a>
                    <a href="{{ route('contact.show') }}" class="btn border border-white/60 text-white hover:bg-white/10">
                        Időpontfoglalás
                    </a>
                </div>
                <p class="mt-6 flex items-center gap-2 text-sm text-brand-100">
                    <x-icon name="map-pin" class="size-4" />
                    {{ config('salon.address') }}
                </p>
            </div>

            <x-placeholder-image
                label="Hero kép — valódi szalon/kezelés fotóra cserélendő"
                variant="light"
                aspect="aspect-[5/4]"
                class="shadow-xl shadow-brand-900/30"
            />
        </div>
    </section>

    {{-- Bemutatkozás --}}
    <section class="section grid gap-10 lg:grid-cols-3 lg:items-start">
        <div class="lg:col-span-1">
            <p class="eyebrow">Üdvözöljük</p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-silver-900">A Janssen Kozmetikában</h2>
        </div>
        <div class="lg:col-span-2">
            <p class="text-lg leading-relaxed text-silver-600">
                Szalonunkat Molitor Linda kozmetikus vezeti, aki a svájci/német <strong>Janssen Cosmetics</strong>
                professzionális márka tudományos alapokra épülő termékeivel és kezelési protokolljaival dolgozik.
                Célunk, hogy minden vendégünk egyedi bőrigényeire szabott, nyugodt és bizalomgerjesztő környezetben
                kapjon kiemelkedő minőségű ápolást — legyen szó egyszerű tisztító kezelésről vagy célzott,
                speciális problémára kifejlesztett kúráról.
            </p>
            <a href="{{ route('about') }}" class="btn-ghost mt-4 px-0">
                Ismerje meg Lindát <x-icon name="arrow-right" class="size-4" />
            </a>
        </div>
    </section>

    {{-- Kiemelt szolgáltatások --}}
    <section class="bg-silver-50">
        <div class="section">
            <x-section-heading
                eyebrow="Szolgáltatások"
                title="Kiemelt kezeléseink"
                description="Válogatás a Janssen Kozmetika legkeresettebb kezeléseiből. A teljes, kategóriákba rendezett kínálatot a Szolgáltatások oldalon találja."
            />

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach (config('salon.service_categories') as $category)
                    <x-service-card :service="$category['services'][0]" />
                @endforeach
            </div>

            <div class="mt-8 flex items-center gap-4">
                <a href="{{ route('services') }}" class="btn-primary">
                    Teljes árlista megtekintése
                </a>
                <span class="text-sm text-silver-500">Végleges árlista egyeztetés alatt</span>
            </div>
        </div>
    </section>

    {{-- Vélemények kiemelve --}}
    <section class="section">
        <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-brand-500 to-brand-700 px-8 py-12 text-white sm:px-12">
            <div class="flex flex-col items-start gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-xl">
                    <p class="eyebrow text-brand-100">Vélemények</p>
                    <h2 class="mt-2 text-2xl font-bold sm:text-3xl">Ügyfeleink visszajelzései beszélnek helyettünk</h2>
                    <p class="mt-3 text-brand-50">
                        Valódi, ellenőrizhető véleményeket Facebook oldalunkon olvashat — mutatjuk is, nem találjuk ki.
                    </p>
                </div>
                <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
                    <a href="{{ route('reviews') }}" class="btn bg-white text-brand-700 hover:bg-brand-50">
                        Vélemények megtekintése
                    </a>
                    <a href="{{ config('salon.facebook') }}" target="_blank" rel="noopener noreferrer" class="btn border border-white/60 text-white hover:bg-white/10">
                        <x-icon name="facebook" class="size-4" />
                        Facebook oldalunk
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Záró CTA --}}
    <section class="section text-center">
        <x-section-heading
            center
            title="Foglaljon időpontot még ma"
            description="Hívjon telefonon, írjon emailt, vagy keressen minket Facebookon — hamarosan online időpontfoglalással is bővítjük oldalunkat."
        />
        <x-cta-buttons class="mt-8 justify-center" />
    </section>
</x-layout>
