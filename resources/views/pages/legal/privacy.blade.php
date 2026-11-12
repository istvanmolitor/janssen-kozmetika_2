<x-layout
    title="Adatvédelmi tájékoztató — Janssen Kozmetika"
    description="A Janssen Kozmetika weboldalának adatvédelmi és süti (cookie) tájékoztatója."
>
    <section class="section max-w-3xl">
        <x-section-heading eyebrow="Jogi tartalom" title="Adatvédelmi tájékoztató" />

        <div class="mt-4 rounded-2xl border border-amber-200 bg-amber-50 p-4 text-sm text-amber-800">
            <p>
                <strong>Figyelem:</strong> ez egy általános sablon tájékoztató. Közzététel előtt kérjük,
                egyeztessenek jogi szakértővel az Infotv. és a GDPR szerinti teljes körű megfelelés érdekében,
                és a szögletes zárójelben jelölt adatokat töltsék ki.
            </p>
        </div>

        <div class="mt-8 space-y-6 text-sm leading-relaxed text-silver-700">
            <div>
                <h2 class="text-base font-semibold text-silver-900">1. Az adatkezelő</h2>
                <p class="mt-2">
                    {{ config('salon.owner') }} (Janssen Kozmetika)<br>
                    {{ config('salon.address') }}<br>
                    Email: {{ config('salon.email') }} &middot; Telefon: {{ config('salon.phone') }}
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-silver-900">2. Kapcsolatfelvételi űrlap</h2>
                <p class="mt-2">
                    A weboldalon található kapcsolatfelvételi űrlap kitöltésekor megadott nevet, email címet,
                    (opcionálisan) telefonszámot és üzenetet kizárólag a megkeresés megválaszolása céljából
                    kezeljük. Az adatokat nem adjuk át harmadik félnek, kivéve a szolgáltatás működéséhez
                    szükséges technikai közreműködőket (pl. tárhelyszolgáltató). Az adatok megőrzési ideje:
                    [megőrzési idő kitöltendő, pl. a megkeresés lezárását követő 1 év].
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-silver-900">3. Sütik (cookie-k)</h2>
                <p class="mt-2">
                    A weboldal a működéshez szükséges (szesszió) sütiket, valamint a Facebook-beágyazás miatt a
                    Facebook (Meta) által elhelyezett harmadik féltől származó sütiket is használhat, amennyiben
                    megtekinti a Vélemények oldalon található beágyazott tartalmat. A süti-elfogadási sáv
                    elfogadásáról a böngészője tárolja a döntést (localStorage).
                </p>
            </div>

            <div>
                <h2 class="text-base font-semibold text-silver-900">4. Az Önt megillető jogok</h2>
                <p class="mt-2">
                    Önt megilleti a hozzáférés, helyesbítés, törlés, adatkezelés korlátozása és a tiltakozás joga.
                    Kérelmét a {{ config('salon.email') }} email címen jelezheti. Panasz esetén a Nemzeti
                    Adatvédelmi és Információszabadság Hatósághoz (NAIH) fordulhat.
                </p>
            </div>
        </div>
    </section>
</x-layout>
