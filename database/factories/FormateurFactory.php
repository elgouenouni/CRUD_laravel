<?php

namespace Database\Factories;

use App\Models\Formateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricule' => $this->faker->numberBetween(10000, 20000),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'genre' => $this->faker->randomElement(['F', 'M']),
            'date_naissance' => '2000-01-01',
            'salaire' => 4000,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
