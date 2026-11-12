@props([
    'title',
    'description',
])

@php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BeautySalon',
        'name' => config('salon.name'),
        'description' => 'Professzionális kozmetikai szalon Siófokon, Janssen Cosmetics termékekkel.',
        'url' => url('/'),
        'telephone' => config('salon.phone'),
        'email' => config('salon.email'),
        'image' => asset('apple-touch-icon.png'),
        'priceRange' => '4000-25000 HUF',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => config('salon.address_street'),
            'addressLocality' => config('salon.address_locality'),
            'postalCode' => config('salon.address_postal_code'),
            'addressCountry' => 'HU',
        ],
        'sameAs' => [
            config('salon.facebook'),
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => config('salon.opening_hours_schema'),
                'opens' => '09:00',
                'closes' => '17:00',
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => config('salon.opening_hours_schema_saturday'),
                'opens' => '09:00',
                'closes' => '13:00',
            ],
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="hu" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="hu_HU">
    <meta property="og:site_name" content="{{ config('salon.name') }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:rounded-lg focus:bg-brand-600 focus:px-4 focus:py-2 focus:text-white">
        Ugrás a tartalomra
    </a>

    <x-nav />

    <main id="main-content" class="flex-1">
        {{ $slot }}
    </main>

    <x-footer />
    <x-cookie-consent />
</body>
</html>
