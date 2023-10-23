<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataSet = [
            ['title' => 'Full Stack Developer', 'created_by' => 'admin'],
            ['title' => 'Android Developer',  'created_by' => 'admin'],
            ['title' => 'Human Resource',  'created_by' => 'admin'],
            ['title' => 'Finance',  'created_by' => 'admin'],
            ['title' => 'Marketing',  'created_by' => 'admin']
        ];

        foreach($dataSet as $data) {
            Position::create($data);
        }
    }
}
