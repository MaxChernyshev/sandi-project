<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usersSeed = new RoleSeeder();

        $usersSeed->run();

        $adminRoleId = Role::where('role', 'admin')->first();

//        dd($adminRoleId->id);

        $password = 'password';

        $user = User::updateOrCreate(
            [
                'email' => 'admin@mail.com',
            ],
            [
                'name' => 'Admin',
                'role_id' => $adminRoleId->id,
                'email_verified_at' => now(),
                'password' => Hash::make($password),
                'created_at' => now(),
                'created_at' => now(),

            ],
        );
        $this->info(sprintf("Admin created with\n\temail: %s \n\tpassword: %s", $user->email, $password));

        return Command::SUCCESS;
    }
}
