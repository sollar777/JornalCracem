@extends('user.layout.app')

@section('content')

    <div class="" id="div-dados-gataMangaba">
        <p><span>Nome:</span> Nome teste</p>
        <p><span>Profissão:</span> profissão teste teste</p>
    </div>

    <hr>
    <br>

    <div class="row">
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

    <hr>
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
