<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuario' => fake()->username(),
            'clave' => fake()->password(),
            'habilitado' => fake()->boolean(),
            'fecha' => fake()->date(),
            'fecha_creacion' => fake()->date(),
            'fecha_modificacion' => fake()->date(),
            'usuario_creacion' => fake()->userName(),
            'usuario_modificacion' => fake()->userName(),
        ];
    }
}
