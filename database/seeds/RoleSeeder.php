<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1, 
                'name' => 'Super Admin',
                'guard_name' => 'web',
            ],
            [
                'id' => 2, 
                'name' => 'Admin',
                'guard_name' => 'web',
            ],
            [
                'id' => 3, 
                'name' => 'Project Manager',
                'guard_name' => 'web',
            ],
            [
                'id' => 4, 
                'name' => 'Sales Manager',
                'guard_name' => 'web',
            ],
            [
                'id' => 5, 
                'name' => 'Member',
                'guard_name' => 'web',
            ]
        ]);
    }
}
