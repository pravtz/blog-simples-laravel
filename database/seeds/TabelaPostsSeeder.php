<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class TabelaPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 50)->create();
    }
}
