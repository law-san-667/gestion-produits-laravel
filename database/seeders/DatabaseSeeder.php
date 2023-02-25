<?php

namespace Database\Seeders;

use App\Models\Produit;
use Database\Factories\ProduitFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Produit::factory(6)->create();
    }
}
