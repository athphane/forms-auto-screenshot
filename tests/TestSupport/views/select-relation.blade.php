<x-forms::form :model="$post">
    <x-forms::input name="content" />
    <x-forms::select name="comments" :options="$options" multiple relation />
    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
