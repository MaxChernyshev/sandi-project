<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instruction::truncate();

        Instruction::create([
            'title' => 'Perogies',
            'content' => fake()->sentence(5),
        ]);

        Instruction::create([
            'title' => 'Perogies with sauerkraut',
            'content' => fake()->sentence(5),
        ]);

        Instruction::create([
            'title' => 'Cabbage Rolls',
            'content' => fake()->sentence(5),
        ]);

        Instruction::create([
            'title' => 'Pre-cooked Cabbage Rolls',
            'content' => fake()->sentence(5),
        ]);
    }
}
