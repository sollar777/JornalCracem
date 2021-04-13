<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Jornal do Cracem</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ asset('user/style.css') }}" rel="stylesheet">

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>

<body>

    {{-- o cabeçário com a imagem --}}

    <header>
        <div class="div-header">
            <div id="image-cabecalho">
                <img src="{{ env('APP_URL') }}/storage/client/imagem/teste.jpg" class="img-fluid"
                    alt="Imagen Responsiva">
            </div>
        </div>
    </header>

    <div class="dateNow">
        <span>Fundador: Jorge Neves | </span>
        <span id="cotacao"></span>
        <span>
            @php
                $mytime = Carbon\Carbon::now();
                echo $mytime->format('j \\d\\e F \\d\\e Y');
            @endphp
        </span>
    </div>


    <nav>
        <input type="checkbox" name="" id="sidebar-toggle">
        <div class="sidebar">
            <label id="lb-check-menu" for="sidebar-toggle" class="fa fa-bars" aria-hidden="true"></label>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ route('user.index') }}" style="text-decoration: none">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.noticias') }}" style="text-decoration: none">
                            <span>Noticias</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.gata') }}" style="text-decoration: none">
                            <span>Gata Mangaba</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.social') }}" style="text-decoration: none">
                            <span>Social</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        <div class="grid-container">
            <div class="main-container">
                @yield('content')
            </div>

            {{-- div para os comerciais --}}
            <div class="div-anuncios-all" id="div-anuncios">
                <span> Anunciantes </span>
                <hr>
            </div>
        </div>
    </main>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script>
        $(window).resize(function() {
            var largura = $(window).width();

            if (largura > 850) {
                $('#sidebar-toggle').prop("checked", false)
            }
        })

        $(document).ready(function() {
            const cotacaoDolar = $('#cotacao')
            const urlCotacao = "https://economia.awesomeapi.com.br/json/all"

            const options = {
                method: 'GET',
                mode: 'cors',
                cache: 'default'
            }

            fetch(urlCotacao, options)
                .then(response => {
                    response.json()
                        .then(data => cotacaoDolar.html("Dolar: R$ " + data["USD"].high + " | Euro: R$ " +
                            data["EUR"].high + " | "))
                })
                .catch(e => console.log("erro" + e.message))

            $.ajax({
                url: "{{ route('user.anunciantes') }}",
                type: "get",
                dataType: "json"
            }).done(function(data) {
                var cols = ""
                $.each(data, function(e) {
                    cols += "<div class='card bg-light mb-3' style='max-width: 25rem;'>";
                    cols += "<div class='card-header'>";
                    cols += "<img class='card-img' src='{{ env('APP_URL') }}/storage/client/imagem/teste.jpg' alt='Card image'>";
                    cols += "</div>";
                    cols += "</div>";
                })
                $("#div-anuncios").append(cols);
            }).fail(function(e) {
                console.log("error: " + e);
            })

        })

    </script>

    @yield('script')


</body>

</html>
