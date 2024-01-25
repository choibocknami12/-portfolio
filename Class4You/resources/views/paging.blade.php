<div>
    @if ($paginator->hasPages())
        <div class="class_board_view_all_pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="class_board_view_all_pagination_div">
                    <div class="class_board_view_all_pagination_p">
                        <p aria-hidden="true">&laquo;이전</p>
                    </div>
                </div>    
            @else
                <div class="class_board_view_all_pagination_div">
                    <div class="class_board_view_all_pagination_a">
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;이전</a>
                    </div>
                </div>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <div class="class_board_view_all_pagination_p">
                        <p>{{ $element }}</p>
                    </div>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <div class="class_board_view_all_pagination_div @if ($page == $paginator->currentPage()) class_board_view_all_pagination_page_on @endif">
                                <div class="class_board_view_all_pagination_p" aria-current="page">
                                    <p>{{ $page }}</p>
                                </div>
                            </div>
                        @else
                            <div class="class_board_view_all_pagination_div">
                                <div class="class_board_view_all_pagination_a">
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="class_board_view_all_pagination_div">
                    <div class="class_board_view_all_pagination_a">
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next">다음&raquo;</a>
                    </div>    
                </div>
            @else
                <div class="class_board_view_all_pagination_div">
                    <div class="class_board_view_all_pagination_p">
                        <p aria-hidden="true">다음&raquo;</p>
                    </div>
                </div>    
            @endif
        </div>
    @endif
</div>
