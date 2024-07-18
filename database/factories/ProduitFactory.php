<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'prix' => $this->faker->numberBetween(1, 1000),
            'date_fab' => $this->faker->date(),
            'date_exp' => $this->faker->date(),
            'categorie_id' => $this->faker->numberBetween(1, Categorie::count()),
            'user_id' => $this->faker->numberBetween(1, User::count()),
        ];
    }
}
