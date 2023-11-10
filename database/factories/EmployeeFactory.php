<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Position;
use \App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'birth_date' => $this->faker->date,
            'location_birth' => $this->faker->city,
            'location_exist' => $this->faker->city,
            'address' => $this->faker->address,
            'url_avatar' => $this->faker->imageUrl(),
            'join_date' => $this->faker->date,
            'position_id' => Position::inRandomOrder()->first()->id,
            'nik' => $this->faker->numberBetween(0000000000000000, 9999999999999999),
            'salary' => $this->faker->numberBetween(1500000, 20000000),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->numberBetween(00000000000, 999999999999),
            'status' =>  $this->faker->randomElement(['active', 'inactive']),   // This will always set the status to 'active   
            'contract' => $this->faker->randomElement(['internship', 'contract', 'fulltime']),
            'created_by' => 'admin',    // This will always set the created_by to "admin"
        ];
    }
}
