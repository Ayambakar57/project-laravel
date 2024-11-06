<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Grade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Student::factory(50)->create();

        Grade::factory()->create([
            'name' => '11 PPLG 1'
        ]);
        Grade::factory()->create([
            'name' => '11 PPLG 2'
        ]);
        Grade::factory()->create([
            'name' => '11 PPLG 3'
        ]);

        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
