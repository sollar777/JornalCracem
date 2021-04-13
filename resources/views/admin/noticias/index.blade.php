@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped listagem-vendas">
            <tr>
                <th>Titulo da Noticia</th>
                <th>Resumo</th>
                <th>Texto</th>
                <th>Notica Princial</th>
                <th>Grupo</th>
                <th>Editar</th>
            </tr>
            @foreach ($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->titulo }}</td>
                    <td>{{ $noticia->resumo }}</td>
                    <td>{{ $noticia->corpo }}</td>
                    <td>
                        @if ($noticia->noticia_principal != 0)
                            Sim
                        @else
                            Não
                        @endif
                    </td>
                    <td>{{ $noticia->grupo_noticia->nome }}</td>
                    <td><a href="{{route('admin.noticia.editar', ['id' => $noticia->id])}}" class="btn btn-success">Editar</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
