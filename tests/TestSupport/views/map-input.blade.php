<x-forms::form id="basic-map-input" :model="$city">
    <x-forms::map-input name="coordinates" enable-polygon enable-radius />
</x-forms::form>

@stack('scripts')
