<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centro>
 */
class CentroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $fillable = [
        'codigo',
        'nombre',
        'direccion',
        'responsable'
    ];

    public function definition(): array
    {
        return [
            'codigo' => fake()->numberBetween(1, 10),
            'nombre' => fake()->name(),
            'direccion' => fake()->address(),
            'responsable' => fake()->name(),
        ];
    }
}
