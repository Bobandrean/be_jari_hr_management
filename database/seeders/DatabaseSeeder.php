<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleSeeder;
use Database\Seeders\PositionSeeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\AnnualLeaveSeeder;
use Database\Seeders\RequestLeaveSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PositionSeeder::class,
            UserSeeder::class,
            EmployeeSeeder::class,
            AnnualLeaveSeeder::class,
            RequestLeaveSeeder::class,
        ]);

    }
}
