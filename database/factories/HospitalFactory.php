<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = ['hospital 1', 'hospital 2', 'hospital 3'];
        $direccion = ['direccion 1', 'direccion 2', 'direccion 3'];
        return [
            'nombre' => fake()->randomElement($nombre),
            'direccion' => fake()->randomElement($direccion),
        ];
    }
}
