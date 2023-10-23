<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Employee;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestLeave>
 */
class RequestLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $leave_from = $this->faker->dateTimeThisYear();
        $leave_to = $this->faker->dateTimeBetween($leave_from, '+15 days');
    
        return [
            'id_employee' => Employee::inRandomOrder()->first()->id, // Adjust as necessary based on employee ids
            'leave_from' => $leave_from,
            'leave_to' => $leave_to,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'is_approved' => $this->faker->randomElement(['approved', 'pending', 'rejected']),
            'created_by' => 'admin',
            'updated_by' => 'admin',
        ];
    }
}
