<style>
    

    /* GENERAL STYLES */
    
    .pagination{
      padding: 30px 0;
    }
    
    .pagination ul{
      margin: 0;
      padding: 0;
      list-style-type: none;
    }
    
    .pagination ul li{
        display: inline-block;
    }
    .pagination a{
        text-decoration: none;
        display: inline-block;
        padding: 10px 18px;
        color: #ffff;
    }
    
    .pagination ul li{
      border: 0.5px solid #EA3509;
    }

    .pagination ul li:hover{
        background-color: #EA3509;
        color: white;
    }

    .pagination ul li a{
        /* color: #EA3509; */
    }
    .is-active, .disabled{
        background-color: #EA3509;
        color: #ffff;
        font-weight: bold;
    }
    
            
    
    </style>
    @if ($paginator->hasPages())
    <div class="pagination">
        <ul>
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <a href="#" tabindex="-1">Previous</a>
                </li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
            @endif
          
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled">{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="is-active">
                                <a>{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                </li>
            @else
                <li class="disabled">
                    <a href="#">Next</a>
                </li>
            @endif
        </ul>
    </div>
    @endif