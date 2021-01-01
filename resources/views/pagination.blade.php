@if(!empty($collection->total) && $collection->total > 1)

    <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-link">
            <a href="#">{{ $collection->total }} Registros encontrados </a>
        </li>
        @for ($i = 1 ; $i <= $collection->last_page; $i++)
            @if ($collection->current_page == $i)
                <li class="page-item active">
                    <a class="page-link" href="#">Pág. {{ $i }}</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $url_pagination }}?page={{ $i }}">Pág. {{ $i }}</a>
                </li>
            @endif
        @endfor
    </ul>

@endif
