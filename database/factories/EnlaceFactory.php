<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enlace>
 */
class EnlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->sentence(),
            'fecha_creacion' => fake()->date(),
            'fecha_modificacion' => fake()->date(),
            'usuario_creacion' => fake()->date(),
            'usuario_modificacion' => fake()->date(),
        ];
    }
}



