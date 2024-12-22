<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints('products_menu_id_foreign');
        Menu::truncate();

        Menu::create([
            'name' => 'Hot',
        ]);

        Menu::create([
            'name' => 'Frozen',
        ]);

        Schema::enableForeignKeyConstraints('products_menu_id_foreign');
    }
}
