<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints('products_category_id_foreign');

        Category::truncate();

        Category::create([
            'name' => 'Perogies',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Cabbage Rolls',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Borsch, Soups',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Sauces',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Desserts',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Sausages',
            'description' => fake()->sentence(5),
        ]);


        Schema::enableForeignKeyConstraints('products_category_id_foreign');
    }
}
