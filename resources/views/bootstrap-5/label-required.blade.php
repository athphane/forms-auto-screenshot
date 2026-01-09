@if($text)
    <span {!! $attributes->merge(['class' => 'required']) !!}>{{ $text }}</span>
@endif
