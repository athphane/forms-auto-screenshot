<x-forms::form :model="$post">
    <x-forms::select2 name="author" :options="$options" ajax-url="/api/authors" name-field="list_name" is-ajax />
    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
