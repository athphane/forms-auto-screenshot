@php
    $select_classes = 'select2-basic form-control mb-4 ' . $hasError('action') ? 'is-invalid' : '';
@endphp

@unless( empty($actions) )
    <div class="row">
        <div class="col-lg-3 col-md-8">
            <div class="form-group mb-2">
                <x-forms::select
                    name="action"
                    :class="$select_classes"
                    :options="['' => ''] + $actions"
                    :placeholder="__('Bulk Action')"
                    hide-search
                    allow-clear
                    required
                />
            </div>
        </div>
        <div class="col-lg-6 col-md-4">
            <div class="btn-group">
                <x-forms::button
                    type="submit"
                    color="warning"
                >
                    {{ __('Apply') }}
                </x-forms::button>
            </div>
        </div>
    </div>

    <x-forms::hidden name="redirect" :value="Request::fullUrl()" />
@endunless
