<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1, 
                'name' => 'Super Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make(1234)
            ],
            [
                'id' => 2, 
                'name' => 'Project Manager',
                'email' => 'pm@test.com',
                'password' => Hash::make(1234)
            ],
            [
                'id' => 3, 
                'name' => 'Sales Manager',
                'email' => 'sm@test.com',
                'password' => Hash::make(1234)
            ],
            [
                'id' => 4, 
                'name' => 'HR',
                'email' => 'hr@test.com',
                'password' => Hash::make(1234)
            ],
        ]);
    }
}
