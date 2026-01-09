@php
    use Javaabu\Forms\Tests\Feature\Country;
    use Javaabu\Forms\Tests\Feature\State;
    use Javaabu\Forms\Tests\Feature\City;
@endphp

<x-forms::form :model="$address">
    <x-forms::select2 name="country" :options="Country::query()" child="#state" is-first />

    <x-forms::select2 name="state" :options="State::whereCountryId($address->country?->id ?? null)" ajax-url="/api/states" child="#city" filter-field="country" />

    <x-forms::select2 name="city" :options="City::whereStateId($address->state?->id ?? null)" ajax-url="/api/cities" filter-field="state" relation />

    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
