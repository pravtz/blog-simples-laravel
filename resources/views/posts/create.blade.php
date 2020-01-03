@extends('layouts.app')


@section('content')
<div class="container">
    <form action="{{ route('post.store') }}" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Titulo</label>
                <input type="text" name="titulo" class="form-control">
            </div>

            <div class="form-group col-md-6">
                <label for="">Subtitulo</label>
                <input type="text" name="subtitulo" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">Texto</label>
                <textarea name="conteudo" class="form-control" rows="4"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="">Descrição do Conteúdo</label>
            <input type="text" name="descricao_conteudo" class="form-control"></div>

        <div class="form-group">
            <label for="referencia">Referência</label>
            <input type="textaria" name="referencia" class="form-control"></div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="imagem">URL da Imagem</label>
                <input type="text" name="imagem" class="form-control"></div>

            <div class="form-group col-md-4">
                <label for="">Descricao da Imagem</label>
                <input type="text" name="descricao_imagem" class="form-control"></div>

            <div class="form-group col-md-3">
                <label for="">Autor do Post</label>
                <input type="text" name="autor_post" class="form-control"></div>

            <div class="form-group col-md-2">
                <label for="categoriaposts_id">Categoria</label>
                <select class="form-control" name="categoriaposts_id">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
            

        <button type="submit" class="btn btn-lg btn-success">Criar Post</button>

    </form>
</div>
@endsection