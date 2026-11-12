@php
    $navItems = [
        ['route' => 'home', 'label' => 'Főoldal'],
        ['route' => 'services', 'label' => 'Szolgáltatások'],
        ['route' => 'about', 'label' => 'Rólam'],
        ['route' => 'gallery', 'label' => 'Galéria'],
        ['route' => 'reviews', 'label' => 'Vélemények'],
        ['route' => 'contact.show', 'label' => 'Kapcsolat'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-silver-100 bg-white/90 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8" aria-label="Fő navigáció">
        <a href="{{ route('home') }}" class="flex flex-col leading-tight">
            <span class="text-lg font-bold tracking-wide text-brand-600 uppercase">Janssen Kozmetika</span>
            <span class="text-xs text-silver-500">Molitor Linda kozmetikus</span>
        </a>

        <div class="hidden items-center gap-8 lg:flex">
            @foreach ($navItems as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="text-sm font-medium transition-colors {{ request()->routeIs($item['route']) ? 'text-brand-600' : 'text-silver-700 hover:text-brand-500' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="{{ config('salon.phone_href') }}" class="btn-primary">
                <x-icon name="phone" class="size-4" />
                Hívjon most
            </a>
        </div>

        <button
            type="button"
            id="mobile-menu-button"
            class="inline-flex items-center justify-center rounded-lg p-2 text-brand-600 lg:hidden"
            aria-expanded="false"
            aria-controls="mobile-menu"
            aria-label="Menü megnyitása"
        >
            <x-icon name="menu" class="size-7" id="menu-icon-open" />
            <x-icon name="close" class="hidden size-7" id="menu-icon-close" />
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-silver-100 bg-white lg:hidden">
        <div class="flex flex-col gap-1 px-6 py-4">
            @foreach ($navItems as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium {{ request()->routeIs($item['route']) ? 'bg-brand-50 text-brand-600' : 'text-silver-700 hover:bg-silver-50' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
            <a href="{{ config('salon.phone_href') }}" class="btn-primary mt-3 justify-center">
                <x-icon name="phone" class="size-4" />
                Hívjon most
            </a>
        </div>
    </div>
</header>
