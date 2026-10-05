<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tag_todo')->insert([
            ['todo_id' => 1, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['todo_id' => 1, 'tag_id' => 10, 'created_at' => now(), 'updated_at' => now()],

            ['todo_id' => 2, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['todo_id' => 2, 'tag_id' => 9, 'created_at' => now(), 'updated_at' => now()],

            ['todo_id' => 3, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['todo_id' => 3, 'tag_id' => 9, 'created_at' => now(), 'updated_at' => now()],

            ['todo_id' => 4, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['todo_id' => 4, 'tag_id' => 11, 'created_at' => now(), 'updated_at' => now()],

            ['todo_id' => 5, 'tag_id' => 12, 'created_at' => now(), 'updated_at' => now()],

            ['todo_id' => 6, 'tag_id' => 13, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
