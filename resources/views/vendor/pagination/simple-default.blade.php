@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span><i class="fas fnt22 fa-angle-double-left"></i></span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fnt22 fa-angle-double-left"></i></a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fnt22 fa-angle-double-right"></i></a></li>
            @else
                <li class="disabled" aria-disabled="true"><span><i class="fas fnt22 fa-angle-double-right"></i></span></li>
            @endif
        </ul>
    </nav>
@endif
