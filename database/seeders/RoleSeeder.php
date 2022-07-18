<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $admin = Role::create([
            'id'   => 2,
            'name' => 'Admin',
            'guard_name' => 'web',
         ]);
   
         //  Creating Super Admin, Note that this code to be removed when making the app live
         $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2a$12$KN/2tagBOwK5mpgf4E8g8.5U6Pvlkx/ve.529ucSaV2lhk4IgFDdW',
         ]);
    }
}
