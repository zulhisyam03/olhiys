<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galery>
 */
class GaleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'     => 'Gambar Lingkungan Hidup',
            'image'     => 'upload-images/galery/lingkungan-hidup.jpg'
        ];
    }
}
