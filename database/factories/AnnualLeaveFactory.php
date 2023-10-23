<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnnualLeave>
 */
class AnnualLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_employee' => Employee::inRandomOrder()->first()->id,
            'quota' => $this->faker->numberBetween(1, 10),
        ];
    }
}
