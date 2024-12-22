<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            MenuSeeder::class,
            CategorySeeder::class,
            InstructionSeeder::class,
            IngredientSeeder::class,
        ]);
    }
}
