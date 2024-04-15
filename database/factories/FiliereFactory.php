<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Filiere; // Make sure to import the Filiere model

class FiliereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => "Filier " . Str::random(3),
            'description' => Str::random(20),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
