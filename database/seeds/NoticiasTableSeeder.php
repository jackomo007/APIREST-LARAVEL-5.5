<?php

use App\Noticia;
use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++){
            Noticia::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
