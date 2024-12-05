<?php

namespace Database\Factories;

use App\Models\Compostera;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registro>
 */
class registroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $fillable = [
        // 'iniCiclo',
        'compostera',
        'user_id',
    ];

    public function definition(): array
    {
        return [
            // 'iniCiclo' => '1',
            'compostera' => fake()->numberBetween(1, 3),
            'user_id' => '1',
        ];
    }
}
