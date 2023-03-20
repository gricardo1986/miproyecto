<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>$this->faker->name(),
            'fecha_nacimiento'=>$this->faker->date('Y-m-d'),
            'sexo'=>$this->faker->randomElement(['m', 'f']),
            'estatura'=>$this->faker->numberBetween(1, 30),
            'peso'=>$this->faker->randomFloat(2, 20, 150)
        ];
    }
}
