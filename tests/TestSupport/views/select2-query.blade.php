@php
    use Javaabu\Forms\Tests\Feature\Country;
@endphp

<x-forms::form :model="$address">
    <x-forms::select2 name="country" :options="Country::query()" />

    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
