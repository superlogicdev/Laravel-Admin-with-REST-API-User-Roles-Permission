<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 4, 
                'role_id' => 2,
            ],
            [
                'permission_id' => 5, 
                'role_id' => 2,
            ],
            [
                'permission_id' => 5, 
                'role_id' => 4,
            ],
            [
                'permission_id' => 6, 
                'role_id' => 2,
            ],
            [
                'permission_id' => 6, 
                'role_id' => 3,
            ],
        ]);


        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\\Models\\User',
                'model_id' => 1,
            ],
            [
                'role_id' => 2,
                'model_type' => 'App\\Models\\User',
                'model_id' => 4,
            ],
            [
                'role_id' => 3,
                'model_type' => 'App\\Models\\User',
                'model_id' => 2,
            ],
            [
                'role_id' => 4,
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ],
        ]);
    }
}
