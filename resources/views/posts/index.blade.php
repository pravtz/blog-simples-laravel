@extends('layouts.app')

@section('content')
    <div class="container">
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
                </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <h2>Nenhum post encontrado</h2>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    {{$posts->links()}}
    </div>
   
@endsection