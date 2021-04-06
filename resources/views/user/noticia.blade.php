@extends('user.layout.app')

@section('content')

    <div class="img-noticias-texto">
        <div id="img-noticia">
            <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Responsive image" class="img-fluid">
        </div>
        <div class="div-noticia-span">
            <span>Titulo da imagem</span>
        </div>
        <p>Texto de noticia da imagem</p>
    </div>

@endsection