<x-forms::form :model="$post">
    <x-forms::select2 name="author" label='Author' :options="$options" />
    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
