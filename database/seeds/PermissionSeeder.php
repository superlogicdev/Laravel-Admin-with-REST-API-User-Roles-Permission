<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 2, 
                'name' => 'manage_role',
                'guard_name' => 'web',
            ],
            [
                'id' => 3, 
                'name' => 'manage_permission',
                'guard_name' => 'web',
            ],
            [
                'id' => 4, 
                'name' => 'manage_user',
                'guard_name' => 'web',
            ],
            [
                'id' => 5, 
                'name' => 'manage_sales',
                'guard_name' => 'web',
            ],
            [
                'id' => 6, 
                'name' => 'manage_projects',
                'guard_name' => 'web',
            ],
        ]);
    }
}
