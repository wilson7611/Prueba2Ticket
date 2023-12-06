<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medico;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atencion>
 */
class AtencionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estados = ['activo', 'inactivo'];
        return [
            'fecha' => fake()->date(),
            'estado' => fake()->randomElement($estados),
            'medico_id' => Medico::factory(),
        ];
    }
}
