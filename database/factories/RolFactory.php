<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['admin', 'maestro', 'alumno'];
        return [
            'rol' => $this->faker->randomElement($roles),
            'fecha_creacion' => fake()->date(),
            'fecha_modificacion' => fake()->date(),
            'usuario_creacion' => fake()->userName(),
            'usuario_modificacion' => fake()->userName(),
        ];
    }
}
