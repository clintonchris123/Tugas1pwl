<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [] ;
        $faker = Factory::create();
        $i;

        for($i = 1; $i <= 7; $i++){
            $posts [] = [
                'title' => $faker-> word($nb = 3, $asText = false),
                'excerpt' => $faker -> sentence($nb = 6, $variableWords = true),
                'content' => $faker -> text($nb = 5, $asText = False),
                'image' => $faker -> image,
                'author_id' => $faker->numberBetween(1, 10)

            ];
        }
        DB::table("posts")->insert($posts);

    } 
    
}
