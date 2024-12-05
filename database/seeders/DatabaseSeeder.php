<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Centro;
use App\Models\Compostera;
use GuzzleHttp\Promise\Create;
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
        // User::factory(10)->create();
        Centro::factory(50)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'centro_id' => 1,
            // 'role' => 'admin',
        ]);

        Compostera::factory(3)->create();
    }
}
