@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Titulo do anuncio</th>
                <th>URL</th>
                <th>Desativado</th>
                <th>Imagem</th>
                <th>Ação</th>
            </tr>
            @foreach ($anuncios as $anuncio)
                <tr>
                    <td>{{ $anuncio->titulo }}</td>
                    <td>{{ $anuncio->url }}</td>
                    <td>
                        @if ($anuncio->desativado != 0)
                            Sim
                        @else
                            Não
                        @endif
                    </td>
                    <td><img src="{{ env('APP_URL') }}/storage/{{$anuncio->path}}" alt="Responsive image" class="img-fluid"></td>
                    <td><a href="{{route('admin.anuncio.edit', ['id' => $anuncio->id])}}" class="btn btn-success">Editar</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection