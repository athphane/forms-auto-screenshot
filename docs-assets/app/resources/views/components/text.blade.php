@extends('layouts.app')

@section('content')

    <div id="text-input-demo" class="p-4">

    <x-forms::text name="name" label="Details" placeholder="Enter some details" required/>

    </div>

@endsection
