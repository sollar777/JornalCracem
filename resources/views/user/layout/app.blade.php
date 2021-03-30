<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Jornal do Cracem</title>

    <!-- Styles -->
    <link href="{{ asset('user/style.css') }}" rel="stylesheet">

    {{--  <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>  --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>

    {{--  o cabeçãrio com a imagem  --}}

    <div id="div-image-cabecalho">
        <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid" alt="Responsive image">
    </div>

    {{--  -------------------------------  --}}

        <div id="index">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gata mangaba</a>
                      </li>
                    {{--  <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>  --}}
                  </ul>
                </div>
              </nav>
        </div>
    
    

    <div class="container">
        @yield('content')
    </div>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
</body>
</html>