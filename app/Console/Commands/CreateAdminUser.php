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

        $email = $this->ask('Enter your email');

        $existingEmail = User::where('email', $email)->first();

        $name = $this->ask('Enter your name');

        $password = $this->secret('Enter your password');

        $confirmedPassword = $this->secret('Confirm your password');

        $adminRoleId = Role::where('role', 'admin')->first();

        if ($password === $confirmedPassword) {
            $user = User::updateOrCreate(
                [
                    'email' => $email,
                ],
                [
                    'name' => $name,
                    'role_id' => $adminRoleId->id,
                    'email_verified_at' => now(),
                    'password' => Hash::make($password),
                    'created_at' => now(),
                ],
            );
            $this->info(sprintf("Admin created with\n\temail: %s \n\tname: %s \n\tpassword: %s", $user->email, $user->name, $password));

            return Command::SUCCESS;
        } else {
            $this->info(sprintf('You did not confirm your password or email, try again'));
            return Command::FAILURE;
        }
    }
}
