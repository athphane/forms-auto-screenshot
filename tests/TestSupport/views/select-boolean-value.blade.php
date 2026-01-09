<x-forms::form :model="['select' => '0']">
    <x-forms::select name="select" :options="['1' => 'Yes', '0' => 'No']" />

    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
