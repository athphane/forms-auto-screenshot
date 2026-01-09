@php
    $org = [
        'name' => "Javaabu\nCompany"
    ];
@endphp

@model($org)
<x-forms::text-entry label="Name" name="name" multiline />
@endmodel
