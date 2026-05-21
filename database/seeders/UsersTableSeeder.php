<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create multiple users
        DB::table('users')->insert([
            [
                'username' => 'admin@admin.com',
                'password' => bcrypt('admin123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'admin2@admin.com',
                'password' => bcrypt('admin2123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'admin3@admin.com',
                'password' => bcrypt('admin3123'),
                'created_at' => date('Y-m-d H:i:s')
            ]

        ]);
    }
}
