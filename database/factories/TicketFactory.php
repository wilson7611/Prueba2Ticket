<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Afiliado;
use App\Models\Medico;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estados = ['reservado', 'finalizado'];
        $observaciones = ['falta', 'Finalizado'];
        return [
            'fecha_hora' => fake()->dateTime(),
            'codigo' => fake()->regexify('[A-Z]{3}-[0-9]{3}-[A-Z]{2}'),
            'estado' => fake()->randomElement($estados),
            'observacion' => fake()->randomElement($observaciones),
            'afiliado_id' => Afiliado::factory(),
            'medico_id' => Medico::factory(),
        ];
    }
}
