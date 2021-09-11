@extends('user.layout.app')

@section('content')

    <div id="h3-noticias">
        <span>Principais Noticias</span>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($noticias as $key => $noticia)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" @if ($key == 0) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner">

            @foreach ($noticias as $key => $noticia)

                <div @if ($key == 0) class="carousel-item active"
                @else
                            class="carousel-item" @endif>
                    <a href="{{route('user.exibir', ['id' => $noticia->id])}}"><img class="d-block w-100" src="{{ env('APP_URL') }}/storage/{{ $noticia->imagens->path }}" alt=""></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $noticia->titulo }}</h5>
                        <p>{{ $noticia->resumo }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- ----------- fim do carrocel --------------- --}}

    <div class="div-index-border">

        <div id="index-h3-politica">
            <span>Política</span>
        </div>

        <div class="row div-index-noticias">
            @foreach ($noticias as $noticia)
                <div class="col-md-4">
                    <div class="card bg-light mb-3" style="max-width: 25rem;">
                        <div class="card-header">
                            <img class="card-img" src="{{ env('APP_URL') }}/storage/{{ $noticia->imagens->path }}"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $noticia->titulo }}</h5>
                            <p class="card-text">{{ $noticia->resumo }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="div-index-border">

        <div id="index-h3-esportes">
            <span>Esportes</span>
        </div>
        <div class="row div-index-noticias">
            @foreach ($noticias as $noticia)
                <div class="col-md-4">
                    <div class="card bg-light mb-3" style="max-width: 25rem;">
                        <div class="card-header">
                            <img class="card-img" src="{{ env('APP_URL') }}/storage/{{$noticia->imagens->path}}"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$noticia->titulo}}</h5>
                            <p class="card-text">{{$noticia->resumo}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
