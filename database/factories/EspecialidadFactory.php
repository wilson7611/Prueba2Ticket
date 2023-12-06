<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medico;
use App\Models\Hospital;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Especialidad>
 */
class EspecialidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especilidades = ['Medicina Interna', 'Dermatologia', 'Oftalmologia'];
        return [
            'nombre' => fake()->randomElement($especilidades),
            'medico_id' => Medico::factory(),
            'hospital_id' => Hospital::factory(),
        ];
    }
}
