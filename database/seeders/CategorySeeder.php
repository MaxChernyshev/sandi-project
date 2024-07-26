<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Schema::disableForeignKeyConstraints('users_role_id_foreign');

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
            'name' => 'Borsch',
            'description' => fake()->sentence(5),
        ]);
        Category::create([
            'name' => 'Sauce',
            'description' => fake()->sentence(5),
        ]);

//        Schema::enableForeignKeyConstraints('users_role_id_foreign');
    }
}
