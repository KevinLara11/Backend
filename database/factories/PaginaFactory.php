<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pagina>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'estado' => fake()->boolean(),
            'descripcion' => fake()->sentence(),
            'icono' => fake()->word(),
            'tipo' => fake()->word(),
            'url' => fake()->url(),
            'fecha_creacion' => fake()->date(),
            'fecha_modificacion' => fake()->date(),
            'usuario_creacion' => fake()->date(),
            'usuario_modificacion' => fake()->date(),
        ];
    }
}



