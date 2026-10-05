<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::firstOrCreate([
            'title' => 'CSC407 Exam 1',
            'description' => 'First exam of the semester',
            'due_date' => '2026-09-15',
            'completed' => true,
            'user_id' => 1
        ]);

        Todo::firstOrCreate([
            'title' => 'APC Meeting',
            'description' => 'Regular APC meeting',
            'due_date' => '2026-09-09',
            'completed' => true,
            'user_id' => 1
        ]);

        Todo::firstOrCreate([
            'title' => 'APC Meeting',
            'description' => 'Regular APC meeting',
            'due_date' => '2026-09-23',
            'completed' => true,
            'user_id' => 1
        ]);

        Todo::firstOrCreate([
            'title' => 'CSC203 Project 2',
            'description' => 'User stories and personas',
            'due_date' => '2026-10-08',
            'user_id' => 1
        ]);

        Todo::firstOrCreate([
            'title' => 'Get lunch',
            'description' => 'Find some carrots',
            'due_date' => '2026-10-06',
            'user_id' => 2
        ]);

        Todo::firstOrCreate([
            'title' => 'Find Elmer',
            'description' => 'Torment Elmer Fudd',
            'due_date' => '2026-09-12',
            'user_id' => 2
        ]);
    }
}
