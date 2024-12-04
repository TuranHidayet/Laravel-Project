@foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
    @if( $page == $paginator->currentPage())
        <span class="bg-info">{{$page}}</span>
    @else
        <a href="{{$url}}">{{$page}}</a>
    @endif
@endforeach


