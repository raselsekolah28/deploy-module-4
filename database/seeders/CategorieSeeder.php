<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["sport", "tech", "food", "vegetables", "fruit", "cook", "pie", "game", "film", "music", "podcast"];

        foreach ($categories as $key => $value) {
            Categorie::create([
                "name" => $value
            ]);
        }
    }
}
