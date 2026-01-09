<a
    {!! $attributes->merge([
        'class' => 'btn btn-' . $color,
    ]) !!}

    @if($url)
        href="{{ $url }}"
    @endif
>{!! $slot !!}</a>
