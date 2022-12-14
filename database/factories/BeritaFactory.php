<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {                  
        return [
            'title'     => $this->faker->sentence(mt_rand(2,8)),
            'slug'      => $this->faker->slug(),
            'body'      => $this->faker->paragraph(mt_rand(6,15)),
            'image'     => 'upload-images/lingkungan-hidup.jpg',
            'author'    => 'Admin'
        ];
    }
}
