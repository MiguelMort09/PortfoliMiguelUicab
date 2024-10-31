<?php

namespace Database\Seeders;

use App\Models\Employment;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class EmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create employments first
        $employments = Employment::factory()->count(5)->create();

        // Attach skills to each employment
        foreach ($employments as $employment) {
            $skills = Skill::inRandomOrder()->take(2)->pluck('id'); // Get 2 random skill IDs
            $employment->skills()->attach($skills); // Attach skills to the employment
        }
    }
}
