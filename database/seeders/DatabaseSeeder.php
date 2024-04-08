<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!Course::where('name', 'Laravel 10 - T1')->first()) {
            Course::create([
                'name' => 'Laravel 10 - T1'
            ]);
        }

        if (!Course::where('name', 'Laravel 10 - T2')->first()) {
            Course::create([
                'name' => 'Laravel 10 - T2'
            ]);
        }

        //$this->call(CourseSeeder::class);
    }
}
