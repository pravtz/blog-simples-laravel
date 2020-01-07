<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    // protected $fillable = ['titulo','slug','subtitulo', 'conteudo','descricao_conteudo','referencia','imagem','descricao_imagem','autor_post','categoriaposts_id'];
}
