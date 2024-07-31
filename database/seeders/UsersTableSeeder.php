<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@uit.no',
                'password' => Hash::make('Pa$$w0rd'),
                'role' => 'admin',
                'status' => 'active',
            ],
            // User
            [
                'name' => 'User',
                'email' => 'user@uit.no',
                'password' => Hash::make('Pa$$w0rd'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
