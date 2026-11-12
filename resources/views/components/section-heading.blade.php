@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'center' => false,
])

<div {{ $attributes->merge(['class' => $center ? 'mx-auto max-w-2xl text-center' : 'max-w-2xl']) }}>
    @if ($eyebrow)
        <p class="eyebrow">{{ $eyebrow }}</p>
    @endif
    <h2 class="mt-2 text-3xl font-bold tracking-tight text-silver-900 sm:text-4xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-4 text-base leading-relaxed text-silver-600">{{ $description }}</p>
    @endif
</div>
