<x-forms::form id="accessor-map-input" :model="$city">
    <x-forms::map-input
        name="custom_coordinates"
        lat-name="custom_lat"
        lng-name="custom_lng"
        polygon-name="custom_boundary"
        radius-name="custom_radius"
        enable-polygon
        enable-radius />
</x-forms::form>
