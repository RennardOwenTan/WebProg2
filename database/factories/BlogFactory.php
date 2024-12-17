<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = \App\Models\Blog::class;
    public function definition(): array
    {
        $categories = ['Mammal', 'Amphibian', 'Reptile', 'Avian', 'Elder Dragon'];

        return [
            //
            'species' => $this->faker->name(),
            'latin' => $this->faker->name(),
            'category' => $this->faker->randomElement($categories),
            'content' => $this->faker->sentence()

        ];
    }
}
