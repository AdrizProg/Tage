<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Antes>
 */
class antesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $fillable = [
        'registro_id',
        'tempAmbiente',
        'tempCompostera',
        'nivelLlenado',
        'olor',
        'otroOlor',
        'insectos',
        'otroInsecto',
        'humedad',
        'otroHumedad',
        'foto',
        'observaciones',
    ];

    public function definition(): array
    {
        return [
            'registro_id' => fake()->numberBetween(1, 10),
            'tempAmbiente' => fake()->numberBetween(20, 40),
            'tempCompostera' => fake()->numberBetween(20, 50),
            'nivelLlenado' => fake()->numberBetween(1, 100),
            'olor' => 'Otro',
            'otroOlor' => fake()->name(),
            'insectos' => 'Otro',
            'otroInsecto' => fake()->name(),
            'humedad' => 'Otro',
            'otroHumedad' => fake()->name(),
            'observaciones' => fake()->text(),
        ];
    }
}
