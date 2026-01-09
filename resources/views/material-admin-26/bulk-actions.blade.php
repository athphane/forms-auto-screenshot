@php
    $select_classes = 'select2-basic form-control mb-4 ';
    $actions_error_class = $hasError('action') ? 'is-invalid' : '';
    $model_error_classes = $hasError($model) ? 'is-invalid' : '';
    $select_classes= implode(' ', [$select_classes, $actions_error_class, $model_error_classes]);
@endphp

@unless( empty($actions) )
    <div class="row">
        <div class="col-lg-3 col-md-8">
            <div class="form-group mb-2">
                <x-forms::select2
                    name="action"
                    :class="$select_classes"
                    :show-label="false"
                    :options="['' => ''] + $actions"
                    :placeholder="__('Bulk Action')"
                    hide-search
                    allow-clear
                    required
                />
            </div>
        </div>
        <div class="col-lg-6 col-md-4">
            <div class="button-group m-t-25">
                <x-forms::button
                    type="submit"
                    color="warning"
                    class="btn--icon-text btn--raised"
                >
                    <i class="zmdi zmdi-check"></i> {{ __('Apply') }}
                </x-forms::button>
            </div>
        </div>
    </div>

    <x-forms::hidden name="redirect" :value="Request::fullUrl()" />
@endunless
