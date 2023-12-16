@if ($paginator->hasPages())
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-center pt-2" aria-label="Table navigation">
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8 justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" >
                    <span aria-hidden="true" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-s-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-s-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-s-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page"class="active flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  "><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-e-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-gray-900 border border-gray-300 rounded-e-lg hover:bg-gray-700 hover:text-redish  dark:border-gray-700 dark:text-gray-400  ">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
