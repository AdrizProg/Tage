<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Centro;
use App\Models\Compostera;
use App\Models\Antes;
use App\Models\Registro;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Centro::factory(2)->create();

        User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'remember_token' => Str::random(10),
                'centro_id' => 1,
                'admin' => true,
            ]
        );

        User::factory()->create(
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user123'),
                'remember_token' => Str::random(10),
                'centro_id' => 1,
            ]
        );

        Compostera::factory()->create(
            [
                'nombre' => 'Aporte',
                'tipo' => 'Aporte',
                'centro' => 1,
            ]
        );

        Compostera::factory()->create(
            [
                'nombre' => 'Degradación',
                'tipo' => 'Degradacion',
                'centro' => 1,
            ]
        );

        Compostera::factory()->create(
            [
                'nombre' => 'Maduración',
                'tipo' => 'Maduracion',
                'centro' => 1,
            ]
        );

        // Compostera::factory(3)->create();
    }
}
