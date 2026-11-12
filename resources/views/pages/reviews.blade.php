<x-layout
    title="Vélemények — Janssen Kozmetika Siófok"
    description="Olvassa el valódi ügyfeleink véleményét a siófoki Janssen Kozmetikáról Facebookon, és nézze meg Google-térbeli bejegyzésünket."
>
    <section class="section">
        <x-section-heading
            eyebrow="Vélemények"
            title="Amit vendégeink mondanak"
            description="Nem találunk ki véleményeket — az alábbiakban közvetlenül a hivatalos Facebook oldalunkat jelenítjük meg, ahol valódi, ellenőrizhető visszajelzéseket olvashat."
        />

        <div class="mt-10 grid gap-10 lg:grid-cols-[2fr_1fr]">
            <div class="card overflow-hidden p-0">
                <div class="aspect-[4/5] w-full sm:aspect-[4/4]">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href={{ urlencode(config('salon.facebook')) }}&tabs=reviews&width=500&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true"
                        width="100%"
                        height="100%"
                        style="border:none;overflow:hidden"
                        scrolling="no"
                        frameborder="0"
                        allowfullscreen="true"
                        allow="encrypted-media"
                        loading="lazy"
                        title="Janssen Kozmetika Facebook vélemények"
                    ></iframe>
                </div>
            </div>

            <div class="space-y-6">
                <div class="card">
                    <x-icon name="facebook" class="size-6 text-brand-500" />
                    <p class="mt-3 font-semibold text-silver-900">Facebook vélemények</p>
                    <p class="mt-1 text-sm text-silver-600">
                        Ha a fenti beágyazás nem töltődik be, közvetlenül is megnézheti oldalunkat.
                    </p>
                    <a href="{{ config('salon.facebook') }}" target="_blank" rel="noopener noreferrer" class="btn-primary mt-4 w-full justify-center">
                        Megnyitás Facebookon
                    </a>
                </div>

                <div class="card">
                    <x-icon name="map-pin" class="size-6 text-brand-500" />
                    <p class="mt-3 font-semibold text-silver-900">Google értékelések</p>
                    <p class="mt-1 text-sm text-silver-600">
                        Keresse fel Google Térkép-bejegyzésünket, ahol szintén valódi ügyfélértékeléseket talál.
                    </p>
                    <a href="{{ config('salon.maps_link') }}" target="_blank" rel="noopener noreferrer" class="btn-outline mt-4 w-full justify-center">
                        Megnyitás Google Térképen
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
