@extends('user.layout.app')

@section('content')

    <div class="div-index-border">

        <div class="div-grit-gata">
            <div class="div-dados-gataMangaba">
                <span>Dados</span>
                <p> Nome teste, tenho robbin de viajar pelo mundo para conhecer todos os paises. Quero me formar em direito.</p>
            </div>
            <div class="div-img-top-gata">
                <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid" alt="Imagen Responsiva">
            </div>
        </div>
    </div>

    <br>

    <div class="div-index-border">

        <div class="div-gata-titulo-fotos">
            <span>Galeria de Fotos</span>
        </div>
        <div class="row div-fotos-gata">
            <div class="img-gata-principal col-md-4">
                <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid" alt="Imagem responsiva"
                    onclick="clique('{{ env('APP_URL') }}/storage/client/imagem/teste.jpg')">
            </div>
            <div class="img-gata-principal col-md-4">
                <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid" alt="Imagem responsiva"
                    onclick="clique('{{ env('APP_URL') }}/storage/client/imagem/teste.jpg')">
            </div>
            <div class="img-gata-principal col-md-4">
                <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid" alt="Imagem responsiva"
                    onclick="clique('{{ env('APP_URL') }}/storage/client/imagem/teste.jpg')">
            </div>
        </div>
    </div>
    
    <br>

    <div id="janelaModal">
        <span id="btFechar">X</span>
        <img id="imgModal">
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#janelaModal").hide();
        });

        function clique(img) {

            var largura = $(window).width();

            if (largura > 780) {
                $("#janelaModal").show(200, function() {
                    $("#imgModal").attr("src", img);
                });
                $("#btFechar").on("click", function() {
                    $("#janelaModal").hide();
                });
            }

        }

    </script>
@endsection
