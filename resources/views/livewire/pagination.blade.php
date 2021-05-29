@if ($paginator->hasPages())
    <ul class="pagination">

        @if(!$paginator->onFirstPage())
            <li wire:click="previousPage">
                <a class="pagination__link" href="javascript:void(0)">
                    <i class="w-4 h-4 fa fa-arrow-left"></i>
                </a>
            </li>
        @endif

        @foreach($elements as $element)
            @if(is_array($elements))

                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li wire:click="gotoPage({{$page}})">
                            <a class="pagination__link pagination__link--active"
                               href="javascript:void(0);">{{$page}}</a>
                        </li>
                    @else
                        <li wire:click="gotoPage({{$page}})">
                            <a class="pagination__link" href="javascript:void(0);">{{$page}}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li wire:click="nextPage">
                <a class="pagination__link" href="javascript:void(0)">
                    <i class="w-4 h-4 fa fa-arrow-right"></i>
                </a>
            </li>
        @endif

    </ul>
@endif
