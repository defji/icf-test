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
        $user = User::create([
            "email" => "balazs.gyorkos@gmail.com",
            "name" => "Györkös Balázs",
            "password" => bcrypt('icf12345')
        ]);
        $user->assignRole(Roles::ROLE_ADMINISTRATOR);
    }
}
