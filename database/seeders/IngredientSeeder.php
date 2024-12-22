<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Schema;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints('ingredient_product_ingredient_id_foreign');
        Ingredient::truncate();


        $ingridients = [
            "beet",
            "tomato",
            "cream",
            "sauerkraut",
            "cabbage",
            "pepper",
            "ground beef 7%",
            "potato",
            "garlic",
            "cottage cheese",
            "cheddar",
            "sour cherry",
            "sweet cherry",
            "blueberry",
            "plum",
            "pork",
            "bacon",
            "onion",
            "salt",
            "tomatoes",
            "dill",
            "sour salt",
            "margarine",
            "flour",
            "soup",
            "rice",
            "herb",
            "carrot",
            "diced",
            "veggie oil",
            "egg’s yolk",
            "mix of spices",
            "seasoning salt",
        ];

        foreach ($ingridients as $ingridient) {
            Ingredient::create([
                'name' => $ingridient,
            ]);
        }

        Schema::enableForeignKeyConstraints('ingredient_product_ingredient_id_foreign');

    }
}
