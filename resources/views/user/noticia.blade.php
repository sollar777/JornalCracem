@extends('user.layout.app')

@section('content')

    <div id="img-noticia">
        <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Responsive image" class="img-fluid">
    </div>
    <h3>Titulo da imagem</h3>
    <p>Texto de noticia da imagem</p>

@endsection