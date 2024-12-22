<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints('products_instruction_id_foreign');
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

        Schema::enableForeignKeyConstraints('products_instruction_id_foreign');
    }
}
