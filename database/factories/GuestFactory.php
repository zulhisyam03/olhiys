<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
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
            'email' => $this->faker->safeEmail(),
            'nama'  => $this->faker->name(),
            'message'=>$this->faker->paragraph(mt_rand(5,15)),
            'read'  => '1'
        ];
    }
}
