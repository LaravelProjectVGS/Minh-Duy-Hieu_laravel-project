@if ($paginator->hasPages())
    <div class="numbers" aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled number" aria-disabled="true">
                    <span aria-hidden="true">&lt;</span>
                </li>
            @else
                <li class="number">
                    <a href="{{ $paginator->previousPageUrl() }}">&lt;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled number" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active number" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="number"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="number">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')">&gt;</a>
                </li>
            @else
                <li class="disabled number" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&gt;</span>
                </li>
            @endif
        </ul>

        <style>
            .numbers li {
                background: #E2E8F0;
                margin-right: 15px;
            }

            .active {
                background: #2A4365 !important;
                color: white;
            }

        </style>
    </div>
@endif
