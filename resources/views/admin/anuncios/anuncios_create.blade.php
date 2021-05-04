@extends('admin.layouts.app')

@section('content')
   
<div class="container div-form-anuncios">
    <form action="{{route('admin.anuncio.save')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Título do anuncio</label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label for="">URL do anuncio</label>
            <input type="text" class="form-control" name="url">
        </div>
        <div class="form-group">
            <label for="">Imagem do anuncio</label>
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