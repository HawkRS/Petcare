@if ($paginator->hasPages())
    <nav>
        <ul class="">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pag-item disabled" aria-disabled="true">
                    <span class="pagina-link">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="pag-item">
                    <a class="pagina-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pag-item">
                    <a class="pagina-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="pag-item disabled" aria-disabled="true">
                    <span class="pagina-link">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
