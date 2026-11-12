@props([
    'label' => 'Helykitöltő kép',
    'icon' => 'camera',
    'aspect' => 'aspect-[4/3]',
    'variant' => 'light',
])

@php
    $variants = [
        'light' => 'from-brand-50 via-white to-silver-100 text-brand-500',
        'brand' => 'from-brand-500 via-brand-600 to-brand-800 text-white',
        'silver' => 'from-silver-100 via-silver-50 to-white text-silver-500',
    ];
    $classes = $variants[$variant] ?? $variants['light'];
@endphp

<div
    {{ $attributes->merge(['class' => "relative {$aspect} w-full overflow-hidden rounded-3xl bg-gradient-to-br {$classes} flex flex-col items-center justify-center gap-3 ring-1 ring-inset ring-black/5"]) }}
    title="Helykitöltő kép — valódi fotóra cserélendő"
>
    <x-icon :name="$icon" class="size-10 opacity-70" />
    <span class="px-4 text-center text-xs font-medium tracking-wide opacity-70">{{ $label }}</span>
</div>
