<?php

namespace Database\Factories;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => 'groupe' . Str::random(5),
            'filiere_id' => Filiere::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
