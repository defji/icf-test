<?php

use App\Constants\Roles;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $user = User::create([
            "name" => "Györkös Balázs",
            "username" => "Admin",
            "password" => bcrypt('admin')
        ]);
        $user->assignRole(Roles::ROLE_ADMINISTRATOR);

        // User 1
        $user = User::create([
            "name" => "User 1",
            "username" => "User 1",
            "password" => bcrypt('user')
        ]);
        $user->assignRole(Roles::ROLE_CONTENT_EDITOR);
        $user->assignRole(Roles::ROLE_REGULAR_USER);

        // User 2
        $user = User::create([
            "name" => "User 2",
            "username" => "User 2",
            "password" => bcrypt('user')
        ]);
        $user->assignRole(Roles::ROLE_CONTENT_EDITOR);
        // User 3
        $user = User::create([
            "name" => "User 3",
            "username" => "User 3",
            "password" => bcrypt('user')
        ]);
        $user->assignRole(Roles::ROLE_REGULAR_USER);
    }
}
