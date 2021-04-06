@extends('user.layout.app')

@section('content')

    <div class="row-div-noticias-all">
        <div class="div-index-border">
            <div class="grid-noticias">
                <div class="div-noticias-img">
                    <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
                </div>
                <div class="div-noticias-texto">
                    <span>Titulo da noticia</span>
                    <p>teste de noticias da imagem que esta sendo exibida.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row-div-noticias-all">
        <div class="div-index-border">
            <div class="grid-noticias">
                <div class="div-noticias-img">
                    <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
                </div>
                <div class="div-noticias-texto">
                    <span>Titulo da noticia</span>
                    <p>teste de noticias da imagem que esta sendo exibida.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row-div-noticias-all">
        <div class="div-index-border">
            <div class="grid-noticias">
                <div class="div-noticias-img">
                    <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="erro" id="img-noticias-all">
                </div>
                <div class="div-noticias-texto">
                    <span>Titulo da noticia</span>
                    <p>teste de noticias da imagem que esta sendo exibida.</p>
                </div>
            </div>
        </div>
    </div>
  

@endsection