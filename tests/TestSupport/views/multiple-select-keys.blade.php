<x-forms::form>
    <x-forms::select multiple name="select[]" :default="(old() ? null : ['be', 'nl'])"
                   :options="['be' => 'Belgium', 'nl' => 'The Netherlands']" />

    <x-forms::input name="another_field" />
    <x-forms::submit>Submit</x-forms::submit>
</x-forms::form>
