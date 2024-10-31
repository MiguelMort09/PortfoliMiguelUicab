<?php

namespace Database\Seeders;

use App\Enums\TypeTechnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'type' => TypeTechnology::type_backend,
                'icon' => 'laravel-icon.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'React',
                'slug' => 'react',
                'type' => TypeTechnology::type_frontend,
                'icon' => 'react-icon.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Node.js',
                'slug' => 'nodejs',
                'type' => TypeTechnology::type_backend,
                'icon' => 'nodejs-icon.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
