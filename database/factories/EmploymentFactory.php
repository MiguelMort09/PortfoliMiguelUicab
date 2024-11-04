<?php

namespace Database\Factories;

use App\Enums\StatusJob;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employment>
 */
class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => $this->faker->jobTitle,
            'company_name' => $this->faker->company,
            'status' => $this->faker->randomElement(StatusJob::cases()), // Assuming statuses are integers
            'date_init' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'date_finished' => $this->faker->dateTimeBetween('now', '+5 years'), // Or null if ongoing
            'description' => $this->faker->paragraph,
            'created_at' => now()->format('Y-m-d'),
            'updated_at' => now()->format('Y-m-d'),
        ];
    }
}
