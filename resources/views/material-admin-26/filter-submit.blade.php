<div class="button-group inline-btn-group">
    {{ $before ?? '' }}

    <x-forms::button color="primary" class="btn--icon-text btn--raised" type="submit">
        <i class="zmdi zmdi-filter-list"></i> {{ __('Filter') }}
    </x-forms::button>

    @if(! empty($export))
        @if(is_array($export))
            <div class="btn-group">

                <x-forms::button
                    color="secondary"
                    class="btn--icon-text btn--raised"
                    type="submit"
                    name="download"
                    value="{{ array_keys($export)[0] ?? '' }}"
                    title="Export to XLSX"
                >
                    <i class="zmdi zmdi-download"></i> {{ __('Export') }}
                </x-forms::button>

                <x-forms::button
                    color="secondary"
                    class="btn--raised dropdown-toggle dropdown-toggle-split"
                    type="button"
                    data-toggle="dropdown"
                >
                    <span class="caret"></span>
                </x-forms::button>
                <ul class="dropdown-menu btn--raised">
                    @foreach($export as $key => $export_item)
                        <li>
                            <x-forms::button
                                color="secondary"
                                class="dropdown-item"
                                type="submit"
                                name="download"
                                value="{{ $key }}"
                            >
                                {{ $export_item }}
                            </x-forms::button>
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            <x-forms::button
                color="secondary"
                class="btn--icon-text btn--raised"
                type="submit"
                name="download"
                value="1"
                title="Export to XLSX"
            >
                <i class="zmdi zmdi-download"></i> {{ __('Export') }}
            </x-forms::button>
        @endif
    @endif

    {{ $after ?? '' }}

    <x-forms::link-button :url="$cancelUrl" color="light" class="btn--icon-text">
        <i class="zmdi zmdi-close-circle"></i> {{ __('Clear') }}
    </x-forms::link-button>

    {{ $slot }}
</div>
