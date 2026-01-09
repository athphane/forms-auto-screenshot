@if($paginator->count())
<div aria-live="polite" role="status" class="dataTables_info">
    {{
    trans_choice(__('Showing :count from total :total entry|Showing :count from total :total entries',
        ['count' =>  $paginator->count(),
        'total' => $paginator->total()]
    ), $paginator->total()) }}
</div>
@endif
@if ($paginator->hasPages())
    <div class="dataTables_paginate paging_simple_numbers mb-4">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <a class="paginate_button previous disabled" href="#">Previous</a>
        @else
            <a class="paginate_button previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <a class="paginate_button disabled"><i class="zmdi zmdi-more-horiz"></i></a>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                <span>
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="" class="paginate_button current">{{ $page }}</a>
                    @else
                        <a class="paginate_button" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
                </span>
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <a class="paginate_button next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
        @else
            <a class="paginate_button next disabled" href="#">Next</a>
        @endif

    </div>
@endif
