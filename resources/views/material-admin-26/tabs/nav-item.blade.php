<li class="nav-item">
    <a href="{{ $url }}"
        @if($isTab)
            data-toggle="tab"
            role="tab"
        @endif
        {!! $attributes->class([
        'nav-link',
        'active' => $active,
        'disabled' => $disabled
    ]) !!}>@if($slot->isNotEmpty()){{ $slot }}@else{{ $title }}@endif</a>
</li>
