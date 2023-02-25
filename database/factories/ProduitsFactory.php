<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prix' => $this->faker->randomNumber(5),
            'user_id' => $this->faker->numberBetween(0, 9999),
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
            'description' => $this->faker->text,
        ];
    }
}
