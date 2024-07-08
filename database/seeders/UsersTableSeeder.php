<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}

