<div {!! $attributes->class([
        'tab-pane',
        'active' => $active,
        'fade' => $active,
        'show' => $active
    ]) !!}
    id="{{ $id() }}"
     role="tabpanel"
>{{ $slot }}</div>
