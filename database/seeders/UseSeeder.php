<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Miguel Uicab',
            'email' => 'devmigueluicab@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('devSof09')
        ]);
    }
}
