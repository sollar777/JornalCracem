@extends('admin.layouts.app')

@section('content')

    <div class="container div-form-noticia">
        <form action="{{route('admin.noticia.atualizar', ['id' => $noticia->id])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Título da notícia</label>
                <input type="text" class="form-control" name="titulo" value="{{$noticia->titulo}}">
            </div>
            <div class="form-group">
                <label for="">Resumo da notícia</label>
                <input type="text" class="form-control" name="resumo" value="{{$noticia->resumo}}">
            </div>
            <div class="form-group">
                <label for="">Corpo da notícia</label>
                <textarea name="corpo" id="" cols="30" rows="10" class="form-control">
                    {{$noticia->corpo}}
                </textarea>
            </div>
            <div class="form-group">
                <label class="form-group">Grupo de Noticia</label>
                <select name="grupo_id" class="form-control">
                    <option value="{{$noticia->grupo_noticia->id}}">{{$noticia->grupo_noticia->nome}}</option>
                    @foreach ($grupos as $grupo)    
                        <option value="{{$grupo->id}}">{{$grupo->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-group">Noticia Principal</label>
                <input type="checkbox" class="check-principal" name="noticia_principal" @if ($noticia->noticia_principal != 0)
                    checked
                @endif>
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

        <img src="{{ env('APP_URL') }}/storage/{{$noticia->imagens->path}}" alt="Responsive image" class="img-fluid">

    </div>

@endsection
