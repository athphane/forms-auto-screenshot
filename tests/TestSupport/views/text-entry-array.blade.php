@php
    $org = [
        'name' => ['apple' => 'orange']
    ];
@endphp

@model($org)
<x-forms::text-entry label="Name" name="name" />
@endmodel
