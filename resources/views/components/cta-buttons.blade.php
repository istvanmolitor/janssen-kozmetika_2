@props(['class' => ''])

<div {{ $attributes->merge(['class' => "flex flex-col gap-3 sm:flex-row {$class}"]) }}>
    <a href="{{ config('salon.phone_href') }}" class="btn-primary">
        <x-icon name="phone" class="size-4" />
        Hívjon most
    </a>
    <a href="{{ route('contact.show') }}" class="btn-outline">
        Időpontfoglalás
    </a>
</div>
