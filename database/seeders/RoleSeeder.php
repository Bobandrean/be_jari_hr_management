<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataSet = [
            ['title' => 'admin'],
            ['title' => 'employee'],
            ['title' => 'supervisor']
        ];

        foreach($dataSet as $data) {
            Role::create($data);
        }
    }
}
