<x-forms::form :model="$article">
    <x-forms::select2 name="status" :options="$options" />
    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
