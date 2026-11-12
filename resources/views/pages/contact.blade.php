<x-layout
    title="Kapcsolat — Janssen Kozmetika Siófok"
    description="Keresse a Janssen Kozmetikát Siófokon, a Fő tér 9. szám alatt. Telefon, email, nyitvatartás és kapcsolatfelvételi űrlap egy helyen."
>
    <section class="section">
        <x-section-heading
            eyebrow="Kapcsolat"
            title="Keressen minket"
            description="Hívjon, írjon, vagy keressen fel minket személyesen Siófok Fő terén — örömmel válaszolunk kérdéseire és segítünk időpontot egyeztetni."
        />

        <div class="mt-12 grid gap-12 lg:grid-cols-[1fr_1.2fr]">
            {{-- Elérhetőségek + térkép --}}
            <div class="space-y-8">
                <div class="card space-y-4">
                    <div class="flex items-start gap-3">
                        <x-icon name="map-pin" class="mt-0.5 size-5 shrink-0 text-brand-500" />
                        <div>
                            <p class="font-semibold text-silver-900">Cím</p>
                            <p class="text-sm text-silver-600">{{ config('salon.address') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <x-icon name="phone" class="mt-0.5 size-5 shrink-0 text-brand-500" />
                        <div>
                            <p class="font-semibold text-silver-900">Telefon</p>
                            <a href="{{ config('salon.phone_href') }}" class="text-sm text-brand-600 hover:underline">{{ config('salon.phone') }}</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <x-icon name="mail" class="mt-0.5 size-5 shrink-0 text-brand-500" />
                        <div>
                            <p class="font-semibold text-silver-900">Email</p>
                            <a href="{{ config('salon.email_href') }}" class="text-sm text-brand-600 hover:underline">{{ config('salon.email') }}</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <x-icon name="clock" class="mt-0.5 size-5 shrink-0 text-brand-500" />
                        <div class="w-full">
                            <p class="font-semibold text-silver-900">Nyitvatartás</p>
                            <ul class="mt-1 space-y-0.5 text-sm text-silver-600">
                                @foreach (config('salon.opening_hours') as $day)
                                    <li class="flex justify-between gap-6">
                                        <span>{{ $day['label'] }}</span>
                                        <span>{{ $day['value'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            @unless (config('salon.opening_hours_confirmed'))
                                <p class="mt-2 text-xs text-brand-600">Irányadó nyitvatartás — Linda megerősítésére vár.</p>
                            @endunless
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <x-icon name="facebook" class="mt-0.5 size-5 shrink-0 text-brand-500" />
                        <div>
                            <p class="font-semibold text-silver-900">Facebook</p>
                            <a href="{{ config('salon.facebook') }}" target="_blank" rel="noopener noreferrer" class="text-sm text-brand-600 hover:underline">
                                facebook.com/janssenkozmetika
                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden rounded-3xl border border-silver-100 shadow-sm">
                    <iframe
                        src="{{ config('salon.maps_embed_src') }}"
                        width="100%"
                        height="320"
                        style="border:0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Janssen Kozmetika térkép — Siófok, Fő tér 9."
                    ></iframe>
                </div>
            </div>

            {{-- Kapcsolatfelvételi űrlap --}}
            <div class="card">
                <h2 class="text-xl font-bold text-silver-900">Írjon nekünk üzenetet</h2>
                <p class="mt-1 text-sm text-silver-600">Lehetőség szerint 1-2 munkanapon belül válaszolunk.</p>

                @if (session('success'))
                    <div class="mt-6 flex items-start gap-3 rounded-2xl bg-green-50 p-4 text-sm text-green-700">
                        <x-icon name="check-circle" class="mt-0.5 size-5 shrink-0" />
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="text-sm font-medium text-silver-700">Név *</label>
                        <input
                            type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="mt-1 w-full rounded-xl border border-silver-200 px-4 py-2.5 text-sm focus:border-brand-500 focus:ring focus:ring-brand-100"
                        >
                        @error('name') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="email" class="text-sm font-medium text-silver-700">Email *</label>
                            <input
                                type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="mt-1 w-full rounded-xl border border-silver-200 px-4 py-2.5 text-sm focus:border-brand-500 focus:ring focus:ring-brand-100"
                            >
                            @error('email') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="text-sm font-medium text-silver-700">Telefon</label>
                            <input
                                type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="mt-1 w-full rounded-xl border border-silver-200 px-4 py-2.5 text-sm focus:border-brand-500 focus:ring focus:ring-brand-100"
                            >
                            @error('phone') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="text-sm font-medium text-silver-700">Üzenet *</label>
                        <textarea
                            id="message" name="message" rows="5" required
                            class="mt-1 w-full rounded-xl border border-silver-200 px-4 py-2.5 text-sm focus:border-brand-500 focus:ring focus:ring-brand-100"
                        >{{ old('message') }}</textarea>
                        @error('message') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-start gap-3">
                        <input
                            type="checkbox" id="consent" name="consent" value="1" required
                            class="mt-1 size-4 rounded border-silver-300 text-brand-600 focus:ring-brand-400"
                        >
                        <label for="consent" class="text-sm text-silver-600">
                            Elolvastam és elfogadom az
                            <a href="{{ route('legal.privacy') }}" class="font-medium text-brand-600 underline">Adatvédelmi tájékoztatót</a>. *
                        </label>
                    </div>
                    @error('consent') <p class="text-xs text-red-600">{{ $message }}</p> @enderror

                    <button type="submit" class="btn-primary w-full justify-center sm:w-auto">
                        Üzenet elküldése
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
