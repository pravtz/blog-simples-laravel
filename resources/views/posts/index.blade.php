@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-12">
            <a class="btn btn-ls btn-success" href="{{ route('post.create') }}">Criar Postagem</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>TITULO</td>
                    <td>SUBTITULO</td>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->titulo}}</td>
                    <td>{{$post->subtitulo}}</td>
                    <td><a href="{{ route('post.show',['post'=>$post->id]) }}">Editar</a></td>
                </tr>
                @empty  <!--  quando não ouver nenhum post -->
                    <tr>
                        <td colspan="3">
                            <h2>Nenhum post encontrado</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    {{$posts->links()}} <!-- exibir a navegação-->
    </div>
   
@endsection