@php
    $actions = [];
    $actions['approve'] = __('Approve');
    $actions['ban'] = __('Ban');
    $actions['delete'] = __('Delete');
@endphp

<x-forms::bulk-actions :actions="$actions" model="users" />



