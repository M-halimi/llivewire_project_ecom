<?php

namespace Database\Seeders;

// use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 20 categories
        \App\Models\Categorie::factory()->count(50)->create();
    }
}
