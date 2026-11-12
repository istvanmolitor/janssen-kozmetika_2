@props(['service'])

<div class="card flex flex-col gap-3">
    <div class="flex items-start justify-between gap-3">
        <h3 class="text-lg font-semibold text-silver-900">{{ $service['name'] }}</h3>
        <span class="shrink-0 rounded-full bg-brand-50 px-3 py-1 text-xs font-semibold text-brand-600">{{ $service['duration'] }}</span>
    </div>
    <p class="text-sm leading-relaxed text-silver-600">{{ $service['description'] }}</p>
    <div class="mt-auto flex items-center justify-between pt-2">
        <span class="text-base font-bold text-brand-600">
            {{ number_format($service['price_from'], 0, ',', ' ') }}&nbsp;–&nbsp;{{ number_format($service['price_to'], 0, ',', ' ') }}&nbsp;Ft
        </span>
        <span class="text-[11px] font-medium tracking-wide text-silver-400 uppercase">irányár</span>
    </div>
</div>
