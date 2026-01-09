<span {!! $attributes->merge(['class' => 'status badge text-bg-' . $color]) !!}>
    @if($slot->isNotEmpty())
        {{ $slot }}
    @else
        {{ $label }}
    @endif
</span>
