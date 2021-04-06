@extends('user.layout.app')

@section('content')

    <div id="h3-noticias">
        <span>Principais Noticias</span>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Teste</h5>
                    <p>Teste de texto da imagem</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Teste 2</h5>
                    <p>Teste de texto da imagem do segundo item</p>
                </div>
            </div>
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

    <div class="div-index-border">

        <div id="index-h3-politica">
            <span>Política</span>
        </div>

        <div class="row div-index-noticias">
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="div-index-border">

        <div id="index-h3-esportes">
            <span>Esportes</span>
        </div>

        <div class="row div-index-noticias">
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 25rem;">
                    <div class="card-header">
                        <img class="card-img" src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            cards
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
