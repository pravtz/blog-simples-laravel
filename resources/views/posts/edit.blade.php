@extends('layouts.app')


@section('content')


<div class="container">
    <form action="{{ route('post.update', ['post'=>$post->id]) }}" method="post">

    <!-- existem três formas de mandar um token csrf -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <!-- {{csrf_field()}} -->
    <!-- @csrf -->

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Titulo</label>
                <input type="text" name="titulo" class="form-control" value="{{$post->titulo}}">
            </div>

            <div class="form-group col-md-6">
                <label for="">Subtitulo</label>
                <input type="text" name="subtitulo" class="form-control" value="{{$post->subtitulo}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">Texto</label>
                <textarea name="conteudo" class="form-control" rows="4" value="{{$post->conteudo}}"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="">Descrição do Conteúdo</label>
            <input type="text" name="descricao_conteudo" class="form-control" value="{{$post->descricao_conteudo}}"></div>

        <div class="form-group">
            <label for="referencia">Referência</label>
            <input type="textaria" value="{{$post->referencia}}" name="referencia" class="form-control" ></div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="imagem">URL da Imagem</label>
                <input type="text" name="imagem" class="form-control" value="{{$post->imagem}}"></div>

            <div class="form-group col-md-4">
                <label for="">Descricao da Imagem</label>
                <input type="text" value="{{$post->descricao_imagem}}" name="descricao_imagem"  class="form-control"></div>

            <div class="form-group col-md-3">
                <label for="">Autor do Post</label>
                <input type="text" name="autor_post" value="{{$post->autor_post}}" class="form-control"></div>

            <div class="form-group col-md-2">
                <label for="categoriaposts_id">Categoria</label>
                <select class="form-control" name="categoriaposts_id">
                    <option selected value="{{$post->categoriaposts_id}}">1</option>

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>


        <button type="submit" class="btn btn-lg btn-success">Criar Post</button>

    </form>
</div>
@endsection
