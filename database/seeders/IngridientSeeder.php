<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingridient;

class IngridientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingridient::truncate();

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
            Ingridient::create([
                'name' => $ingridient,
            ]);
        }

    }
}
