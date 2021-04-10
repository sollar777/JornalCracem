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
            <tr>
                @foreach ($noticias as $noticia)
                    <td>{{ $noticia->titulo }}</td>
                    <td>{{ $noticia->resumo }}</td>
                    <td>{{ $noticia->corpo }}</td>
                    <td>
                        @if ($noticia->noticia_principal)
                            sim
                        @else
                            Não
                        @endif
                    </td>
                    <td>{{ $noticia->grupo_noticia->nome }}</td>
                    <td><a href="#" class="btn btn-success">Editar</a></td>
                @endforeach
            </tr>
        </table>

    </div>
@endsection
