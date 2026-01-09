<button
    {!! $attributes->class([
        'btn btn-' . $color,
        'animate-submit' => $animate,
    ]) !!}

    @if($type)
        type="{{ $type }}"
    @endif
>{!! $slot !!}</button>
