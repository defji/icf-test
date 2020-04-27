<?php

use App\Constants\Roles;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => Roles::ROLE_ADMINISTRATOR]);
        Role::create(['name' => Roles::ROLE_CONTENT_EDITOR]);
        Role::create(['name' => Roles::ROLE_REGULAR_USER]);
    }
}
