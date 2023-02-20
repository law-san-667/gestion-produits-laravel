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
                'description' => $this->faker->text,
            ];
        }

        
    }