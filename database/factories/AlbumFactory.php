<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'author' => 'Ben Berkenbosch',
            'publish_date' => fake()->date(),
            'thumbnail' => 'images/wallpaper.png',
            'cover' => 'images/TO.jpg',
            'description' => fake()->text,
            'artwork' => fake()->name,
            'buttontext' => 'Listen now!',
            'buttonlink' => 'http://127.0.0.1:8000/albums/1'
        ];
    }
}
