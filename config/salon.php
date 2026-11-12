<?php

return [

    'name' => 'Janssen Kozmetika',
    'owner' => 'Molitor Linda',
    'owner_title' => 'Molitor Linda kozmetikus',

    'phone' => '+36 20 363 0478',
    'phone_href' => 'tel:+36203630478',

    'email' => 'janssenkozmetika@gmail.com',
    'email_href' => 'mailto:janssenkozmetika@gmail.com',

    // A kapcsolatfelvételi űrlap üzeneteit erre a címre küldjük.
    'contact_notify_email' => env('CONTACT_NOTIFY_EMAIL', 'janssenkozmetika@gmail.com'),

    'address' => '8600 Siófok, Fő tér 9.',
    'address_locality' => 'Siófok',
    'address_postal_code' => '8600',
    'address_street' => 'Fő tér 9.',

    'facebook' => 'https://www.facebook.com/janssenkozmetika',

    // A Google Maps beágyazáshoz nem szükséges API kulcs (kereséses embed).
    'maps_embed_src' => 'https://www.google.com/maps?q=8600+Si%C3%B3fok%2C+F%C5%91+t%C3%A9r+9&output=embed',
    'maps_link' => 'https://www.google.com/maps/search/?api=1&query=8600+Si%C3%B3fok%2C+F%C5%91+t%C3%A9r+9',

    // Megerősítésre vár Lindától — jelenleg irányadó, placeholder nyitvatartás.
    'opening_hours_confirmed' => false,
    'opening_hours' => [
        ['label' => 'Hétfő', 'value' => 'Zárva'],
        ['label' => 'Kedd', 'value' => '09:00 – 17:00'],
        ['label' => 'Szerda', 'value' => '09:00 – 17:00'],
        ['label' => 'Csütörtök', 'value' => '09:00 – 17:00'],
        ['label' => 'Péntek', 'value' => '09:00 – 17:00'],
        ['label' => 'Szombat', 'value' => '09:00 – 13:00'],
        ['label' => 'Vasárnap', 'value' => 'Zárva'],
    ],

    // JSON-LD "openingHoursSpecification" formátumhoz (schema.org napkódok).
    'opening_hours_schema' => ['Tu', 'We', 'Th', 'Fr'],
    'opening_hours_schema_saturday' => ['Sa'],

    // Árak még nem véglegesek — Lindával egyeztetés alatt. Jól látható jelöléssel szerepelnek.
    'prices_confirmed' => false,

    'service_categories' => [
        [
            'key' => 'arckezelesek',
            'title' => 'Arckezelések',
            'description' => 'Bőrtípusra szabott, professzionális arckezelések a mindennapi ápolástól az intenzív megújulásig.',
            'services' => [
                [
                    'name' => 'Hidratáló / revitalizáló arckezelés',
                    'description' => 'Kiszáradt, fáradt bőr intenzív hidratálása és frissítése Janssen Cosmetics aktív hatóanyagokkal.',
                    'price_from' => 14000,
                    'price_to' => 18000,
                    'duration' => '60 perc',
                ],
                [
                    'name' => 'Anti-aging / érettebb bőr kezelés',
                    'description' => 'Feszesítő, regeneráló kezelés a bőr rugalmasságáért és a finom vonalak csökkentéséért.',
                    'price_from' => 16000,
                    'price_to' => 22000,
                    'duration' => '75 perc',
                ],
                [
                    'name' => 'Érzékeny bőr nyugtató kezelés',
                    'description' => 'Kímélő, bőrbarát kezelés a kipirosodásra és érzékenységre hajlamos bőr számára.',
                    'price_from' => 14000,
                    'price_to' => 17000,
                    'duration' => '60 perc',
                ],
            ],
        ],
        [
            'key' => 'tisztito-kezelesek',
            'title' => 'Tisztító kezelések',
            'description' => 'Alapos, szakszerű bőrtisztítás a makulátlan, kiegyensúlyozott bőrért.',
            'services' => [
                [
                    'name' => 'Klasszikus kozmetikai arctisztítás',
                    'description' => 'Mélytisztítás, bőrelemzés és komedó-eltávolítás, bőrtípusra szabott ápolással zárva.',
                    'price_from' => 10000,
                    'price_to' => 14000,
                    'duration' => '75 perc',
                ],
                [
                    'name' => 'Enzimes peeling kiegészítő kezelés',
                    'description' => 'Finom hámlasztás az élettelen hámsejtek eltávolítására, ragyogóbb bőrképért.',
                    'price_from' => 6000,
                    'price_to' => 9000,
                    'duration' => '30 perc',
                ],
            ],
        ],
        [
            'key' => 'janssen-specialis',
            'title' => 'Speciális Janssen-kezelések',
            'description' => 'A svájci/német Janssen Cosmetics professzionális termékcsaládjára épülő, célzott hatású kezelések.',
            'services' => [
                [
                    'name' => 'Janssen Cosmetics prémium ampulla-kezelés',
                    'description' => 'Koncentrált aktív hatóanyagokkal dolgozó, azonnal látható eredményt adó exkluzív kezelés.',
                    'price_from' => 18000,
                    'price_to' => 25000,
                    'duration' => '75 perc',
                ],
                [
                    'name' => 'Janssen célzott problémás bőr kezelés',
                    'description' => 'Pattanásos, zsíros vagy problémás bőrre specializált, gyulladáscsökkentő kezelési protokoll.',
                    'price_from' => 16000,
                    'price_to' => 21000,
                    'duration' => '75 perc',
                ],
            ],
        ],
        [
            'key' => 'szemoldok-szempilla',
            'title' => 'Szemöldök és szempilla',
            'description' => 'Precíz formázás és festés a tekintet kiemeléséért.',
            'services' => [
                [
                    'name' => 'Szemöldökformázás és -festés',
                    'description' => 'Arcformához igazított szemöldökforma, tartós festéssel.',
                    'price_from' => 4000,
                    'price_to' => 6000,
                    'duration' => '30 perc',
                ],
                [
                    'name' => 'Szempillafestés',
                    'description' => 'Tartós szempillafestés, kiemelt tekintetért smink nélkül is.',
                    'price_from' => 4000,
                    'price_to' => 5000,
                    'duration' => '20 perc',
                ],
                [
                    'name' => 'Szemöldök- és szempillafestés kombinált csomag',
                    'description' => 'A két kezelés együtt, kedvezőbb áron.',
                    'price_from' => 7000,
                    'price_to' => 9000,
                    'duration' => '40 perc',
                ],
            ],
        ],
    ],

    'gallery_placeholders' => [
        ['label' => 'Szalon belső tér'],
        ['label' => 'Kezelés közben'],
        ['label' => 'Janssen Cosmetics termékek'],
        ['label' => 'Váró és recepció'],
        ['label' => 'Arckezelés eszközök'],
        ['label' => 'Szemöldökformázás'],
        ['label' => 'Ápolt bőr eredmény'],
        ['label' => 'Szalon bejárat'],
    ],

];
