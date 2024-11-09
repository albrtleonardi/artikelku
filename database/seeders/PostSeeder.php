<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID'); 

        $categoryIds = Category::pluck('id')->toArray(); 

        for ($i = 0; $i < 50; $i++) { 
            Post::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'category_id' => $faker->randomElement($categoryIds), 
            ]);
        }
    }
}
