<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('users')->insert([
        //     'name' => 'Bob',
        //     'email' => 'bobandrean94@gmail.com',
        //     'password' => Hash::make('123456'), // Use Hash to securely hash the password
        //     'role_id' => 1,
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Steven',
        //     'email' => 'stevenmartono202@gmail.com',
        //     'password' => Hash::make('123456'), // Use Hash to securely hash the password
        //     'role_id' => 1,
        // ]);

        \App\Models\User::factory(10)->create();
    }
}
