@extends('layouts.app')


@section('content')


<div class="container">
    <H1>{{$post->titulo}}</H1>
    <h2>{{$post->subtitulo}}</h2>
    <img src="{{$post->imagem}}" alt="{{$post->descricao_imagem}}">
    <p>{{$post->conteudo}}</p>


</div>
@endsection
