<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1 Admin
        DB::table('user')->insert([
            'npm' => '5520124000',
            'username' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'System',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 50 User (NPM 5520124091–5520124140)
        for ($i = 91; $i <= 140; $i++) {
            $npm = '55201' . '24' . str_pad($i, 3, '0', STR_PAD_LEFT);

            DB::table('user')->insert([
                'npm' => $npm,
                'username' => 'user' . $i,
                'first_name' => 'User' . $i,
                'last_name' => 'Test',
                'email' => 'user' . $i . '@mail.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}