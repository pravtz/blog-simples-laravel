<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'slug' => $faker->slug,
        'subtitulo'=> $faker->sentence,
        'conteudo'=> $faker->text($maxNbChars = 200),
        'descricao_conteudo'=> $faker->sentence,
        'referencia'=> $faker->sentence,
        'imagem'=>$faker->imageUrl($width = 640, $height = 480),
        'descricao_imagem'=> $faker->sentence,
        'autor_post'=> $faker->name,
        'categoriaposts_id'=> 1
    ];
});
