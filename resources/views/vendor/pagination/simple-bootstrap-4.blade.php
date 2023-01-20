<div class="row justify-content-center">
    <div class="col-8">        
@if ($paginator->hasPages())
    <nav class="container">
        <ul class="pagination row justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="col-6 col-md-4 col-lg-2">
                <li class="pag-item disabled" aria-disabled="true">
                    <span class="pagina-link">@lang('pagination.previous')</span>
                </li>
                </div>
            @else
                <div class="col-6 col-md-4 col-lg-2">
                <li class="pag-item">
                    <a class="pagina-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
                </div>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="col-6 col-md-4 col-lg-2">
                <li class="pag-item">
                    <a class="pagina-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
                </div>
            @else
                <div class="col-6 col-md-4 col-lg-2">
                <li class="pag-item disabled" aria-disabled="true">
                    <span class="pagina-link">@lang('pagination.next')</span>
                </li>
                </div>
            @endif
        </ul>
    </nav>
@endif
    </div>
</div>
