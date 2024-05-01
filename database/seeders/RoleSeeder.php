<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints('users_role_id_foreign');

        Role::truncate();

        Role::create([
            'role' => 'user',
            'description' => 'no access to admin panel',
        ]);

        Role::create([
            'role' => 'editor',
            'description' => 'no access to admin panel',
        ]);

        Role::create([
            'role' => 'manager',
            'description' => 'no access to admin panel',
        ]);

        Role::create([
            'role' => 'admin',
            'description' => 'no access to admin panel',
        ]);

        Schema::enableForeignKeyConstraints('users_role_id_foreign');
    }
}
