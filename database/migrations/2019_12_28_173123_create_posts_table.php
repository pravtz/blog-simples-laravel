<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('titulo');
            $table->string('slug');
            $table->string('subtitulo');
            $table->text('conteudo');
            $table->text('descricao_conteudo');
            $table->string('referencia');
            $table->string('imagem');
            $table->string('descricao_imagem');
            $table->string('autor_post');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
