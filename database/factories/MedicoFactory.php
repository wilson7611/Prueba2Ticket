<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_completo' => fake()->name(),
            'ci' => fake()->numberBetween(00000000, 99999999),
            'matricula' => fake()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
        ];
    }
}
