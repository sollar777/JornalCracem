@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('admin.noticias.salvar')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Título da notícia</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Resumo da notícia</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Corpo da notícia</label>
                <textarea name="corpo" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label class="form-group">Grupo de Noticia</label>
                <select name="grupo" class="form-control">
                    <option value="0">Teste</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-group">Noticia Principal</label>
                <input type="checkbox" class="" name="principal">
            </div>
            <div class="form-group">
                <label for="">Imagem da notícia</label>
                <input type="file" class="form-control" name="imagem">
            </div>
            <div class="row">
                <div class="offset-md-8 col-md-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success form-control">Salvar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
