<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Post;

class posts extends Controller
{

    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->post->orderBy('id','DESC')->paginate(10);
        //return $posts;
        //return view('posts.index', ['posts' => $posts]); //passando a variavel para a view
        return view('posts.index', compact('posts'));  // outra maneira de passar uma variavel para view criando um array associativo com compact que e nativo do php


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // enviando os dados via ACTIVE RECORD
        $data = $request->all();
        $slug = Str::slug( $data['titulo'] , '-');
        $post = $this->post; //aqui eu estancio o model e depois vou possando os dados
        $post->titulo = $data['titulo'];
        $post->slug = $slug;
        $post->subtitulo = $data['subtitulo'];
        $post->conteudo = $data['conteudo'];
        $post->descricao_conteudo = $data['descricao_conteudo'];
        $post->referencia = $data['referencia'];
        $post->imagem = $data['imagem'];
        $post->descricao_imagem = $data['descricao_imagem'];
        $post->autor_post = $data['autor_post'];
        $post->categoriaposts_id = $data['categoriaposts_id'];
        $post->save(); // para salvar o conteudo do geito active record


        /*
        // enviando os dados em massa do jeito mass assignment - tem que criar um campo array fillable no model para permitir essa propriedade
        $data = $request->all();
        $post =$this->post->create($data);
        */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {
        $post = $this->post->find($id);
        return view('post.edit', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
