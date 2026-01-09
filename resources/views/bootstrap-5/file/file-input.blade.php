<div data-provides="fileinput" @class([
        'fileinput',
        $fileInputClass,
        'fileinput-exists' => (bool) $value,
        'fileinput-new' => empty($value),
    ])>
    <span class="btn btn-primary btn-file mr-3">
        <span class="fileinput-new">{{ trans('forms::strings.fileinput_select_file') }}</span>
        <span class="fileinput-exists">{{ trans('forms::strings.fileinput_change_file') }}</span>
        <input
            {!! $attributes->merge([
                'class' => ($hasError($name) ? 'is-invalid' : ''),
                'required' => $required
            ]) !!}
            type="file"
            accept="{{ implode(',', $mimeTypes) }}"
            name="{{ $name }}"
            @if($label && ! $attributes->get('id'))
                id="{{ $id() }}"
            @endif
    />
    </span>
    <span class="fileinput-filename">
        @unless(empty($value))
            <a href="{{ $value }}" target="_blank">
                <i class="fa fa-download"></i> {{ $value }}
            </a>
        @endunless
    </span>
    <a href="#" class="close fileinput-exists" data-dismiss="fileinput">&times;</a>
</div>
