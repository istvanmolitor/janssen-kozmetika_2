<footer class="border-t border-silver-100 bg-brand-800 text-silver-100">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:px-8">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <p class="text-lg font-bold tracking-wide text-white uppercase">Janssen Kozmetika</p>
                <p class="mt-1 text-sm text-silver-300">Molitor Linda kozmetikus</p>
                <p class="mt-4 text-sm text-silver-300">
                    Prémium svájci/német Janssen Cosmetics termékekkel dolgozó kozmetikai szalon Siófok szívében.
                </p>
            </div>

            <div>
                <p class="eyebrow text-brand-200">Elérhetőség</p>
                <ul class="mt-4 space-y-2 text-sm text-silver-200">
                    <li class="flex items-start gap-2">
                        <x-icon name="map-pin" class="mt-0.5 size-4 shrink-0 text-brand-300" />
                        <span>{{ config('salon.address') }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <x-icon name="phone" class="size-4 shrink-0 text-brand-300" />
                        <a href="{{ config('salon.phone_href') }}" class="hover:text-white">{{ config('salon.phone') }}</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <x-icon name="mail" class="size-4 shrink-0 text-brand-300" />
                        <a href="{{ config('salon.email_href') }}" class="hover:text-white">{{ config('salon.email') }}</a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="eyebrow text-brand-200">Nyitvatartás</p>
                <ul class="mt-4 space-y-1 text-sm text-silver-200">
                    @foreach (config('salon.opening_hours') as $day)
                        <li class="flex justify-between gap-4">
                            <span>{{ $day['label'] }}</span>
                            <span>{{ $day['value'] }}</span>
                        </li>
                    @endforeach
                </ul>
                @unless (config('salon.opening_hours_confirmed'))
                    <p class="mt-3 text-xs text-brand-200/80">Irányadó nyitvatartás — egyeztetés alatt.</p>
                @endunless
            </div>

            <div>
                <p class="eyebrow text-brand-200">Kövessen minket</p>
                <div class="mt-4 flex items-center gap-3">
                    <a
                        href="{{ config('salon.facebook') }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex size-10 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-white/20"
                        aria-label="Janssen Kozmetika Facebook oldala"
                    >
                        <x-icon name="facebook" class="size-5" />
                    </a>
                </div>
                <a href="{{ route('contact.show') }}" class="btn-outline mt-6 border-white/30 text-white hover:bg-white/10">
                    Időpontfoglalás
                </a>
            </div>
        </div>

        <div class="mt-12 flex flex-col gap-4 border-t border-white/10 pt-6 text-xs text-silver-300 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ now()->year }} Janssen Kozmetika — Molitor Linda. Minden jog fenntartva.</p>
            <div class="flex gap-4">
                <a href="{{ route('legal.imprint') }}" class="hover:text-white">Impresszum</a>
                <a href="{{ route('legal.privacy') }}" class="hover:text-white">Adatvédelem</a>
            </div>
        </div>
    </div>
</footer>
