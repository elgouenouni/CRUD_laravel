<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Groupe;

class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'genre' => $this->faker->randomElement(['F', 'M']),
            'date_naissance' => '2000-01-01',
            'moyenne' => rand(0, 20),
            'groupe_id' => Groupe::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
