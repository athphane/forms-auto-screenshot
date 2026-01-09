<div
    {!! $attributes->merge([
        'class' => 'button-group' . ($inline ? ' inline-btn-group' : '')
    ]) !!}
>{!! $slot !!}</div>
