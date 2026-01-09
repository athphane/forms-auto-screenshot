@php
$items = [
    [
        'name'     => 'first-tab',
        'title'    => __('First Tab Title'),
    ],
    [
        'name' => 'active-tab'
    ],
    [
        'name'     => 'disabled-tab',
        'title'    => __('Disabled Tab'),
        'disabled' => true,
    ],
    [
        'name'     => 'external-tab',
        'url'      => 'http://example.com',
    ],
];
@endphp

<x-forms::tabs :tabs="$items" active="active-tab">
    <x-slot:first-tab>
        First Tab Content
    </x-slot:first-tab>

    <x-slot:active-tab>
        Active Tab Content
    </x-slot:active-tab>

    <x-slot:disabled-tab>
        Disabled Tab Content
    </x-slot:disabled-tab>
</x-forms::tabs>
