<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(20999)->create();

        User::factory()->create([
            'name' => 'Shihab',
            'email' => 'shihab@test.com',
            'password' => bcrypt('password'),
            'role' => User::ROLE_SUPER_ADMIN
        ]);
    }
}
