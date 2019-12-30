<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\CategoriaPost;


class TabelaCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoriaposts')->insert([
            'categoria'=>'Técnologia',
            'descricao_categoria'=>'Artigos relacionados as melhores técnologias do mercado.'
        ]);
        DB::table('categoriaposts')->insert([
            'categoria'=>'Marketing Digital',
            'descricao_categoria'=>'Artigos relacionados ao Marketing Digital'
        ]);
        DB::table('categoriaposts')->insert([
            'categoria'=>'Marketing de Relacionamento',
            'descricao_categoria'=>'Artigos relacionados ao marketing de Relacionamento'
        ]);
        DB::table('categoriaposts')->insert([
            'categoria'=>'Desing',
            'descricao_categoria'=>'Artigos relacionados a design'
        ]);
    }
}
