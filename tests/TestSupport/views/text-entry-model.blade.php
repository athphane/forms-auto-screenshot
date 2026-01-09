@php
    $org = [
        'name' => 'Javaabu'
    ];
@endphp

<x-forms::infolist :model="$org">
    <x-forms::text-entry label="Name" name="name" />
</x-forms::infolist>
