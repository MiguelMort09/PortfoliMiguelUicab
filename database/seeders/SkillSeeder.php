<?php

namespace Database\Seeders;

use App\Enums\TypeSkill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            [
                'name' => 'PHP',
                'level' => 3,
                'proficiency' => 0.75,
                'is_technical' => true,
                'type' => TypeSkill::Technical,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JavaScript',
                'level' => 4,
                'proficiency' => 0.85,
                'is_technical' => true,
                'type' => TypeSkill::Technical,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Communication',
                'level' => 5,
                'proficiency' => 0.90,
                'is_technical' => false,
                'type' => TypeSkill::Soft,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
