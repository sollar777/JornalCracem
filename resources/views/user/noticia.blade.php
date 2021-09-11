@extends('user.layout.app')

@section('content')

    <div class="img-noticias-texto">
        <div id="img-noticia">
            <img src="{{ env('APP_URL') }}/storage/{{ $noticia->imagens->path }}" alt="Responsive image" class="img-fluid">
        </div>
        <div class="div-noticia-span">
            <span>{{$noticia->titulo}}</span>
        </div>
        <p>{{$noticia->corpo}}</p>
    </div>

@endsection