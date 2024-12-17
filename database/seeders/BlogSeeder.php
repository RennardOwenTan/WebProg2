<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserBlog;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = Faker::create();
        $categories = ['Mammal', 'Amphibian', 'Reptile', 'Avian', 'Elder Dragon'];

        foreach(range(1, 20) as $index){
            DB::table('blogs')->insert([
            'species' => $faker->name(),
            'latin' => $faker->name(),
            'category' => $faker->randomElement($categories),
            'content' => $faker->sentence(25),
            'image' => $faker->imageUrl(200, 300, 'blogs', true, 'blog cover')
            ]);
        }
    }
}
