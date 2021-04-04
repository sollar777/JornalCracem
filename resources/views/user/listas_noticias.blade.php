@extends('user.layout.app')

@section('content')
    
    <div class="row div-noticias-all">
        <div class="col-md-4">
            <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
        </div>
        <div class="col-md-8">
            <h3 id="h3-noticias-all">Titulo da noticia</h3>
            <p>teste de noticias da imagem que esta sendo exibida.</p>
        </div>
    </div>
    <hr>
    <br>
    <div class="row div-noticias-all">
        <div class="col-md-4">
            <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
        </div>
        <div class="col-md-8">
            <h3 id="h3-noticias-all">Titulo da noticia</h3>
            <p>teste de noticias da imagem que esta sendo exibida.</p>
        </div>
    </div>
    <hr>
    <br>
    <div class="row div-noticias-all">
        <div class="col-md-4">
            <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
        </div>
        <div class="col-md-8">
            <h3 id="h3-noticias-all">Titulo da noticia</h3>
            <p>teste de noticias da imagem que esta sendo exibida.</p>
        </div>
    </div>
    <br>

@endsection