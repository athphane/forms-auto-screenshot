<div id="normal">
    <x-forms::card title="Card Title">
        This is a card
    </x-forms::card>
</div>

<div id="header">
    <x-forms::card title="Card Title">
        <x-slot:header class="text-primary">
            This is in the header
        </x-slot:header>
        This is a card
    </x-forms::card>
</div>


<div id="footer">
    <x-forms::card title="Card Title">
        <x-slot:footer>
            Card Footer
        </x-slot:footer>
        This is a card
    </x-forms::card>
</div>

<div id="image-top">
    <x-forms::card title="Card Title">
        <x-slot name="image_top">
            <img src="..." class="card-img-top" alt="...">
        </x-slot>
        This is a card
    </x-forms::card>
</div>

<div id="subtitle">
    <x-forms::card title="Card Title">
        <x-slot:subtitle class="mb-2 text-muted">
            Card Subtitle
        </x-slot:subtitle>
        This is a card
    </x-forms::card>
</div>
