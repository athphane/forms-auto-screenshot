<div class="card">
    <div class="card-body">
        {{ $slot }}

        <x-forms::hidden
            name="orderby"
        />

        <x-forms::hidden
            name="order"
        />
    </div>
</div>
