<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = ['GAMS'];
        $propietario = ['Enrique Leaño'];
        return [
            'nombre' => fake()->randomElement($nombre),
            'propietario' =>fake()->randomElement($propietario),
            'hospital_id' => Hospital::factory(),
        ];
    }
}
