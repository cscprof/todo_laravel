<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Note that order of creation matters because of PL/FK key values
        $this->call([
            UserSeeder::class,
            TagSeeder::class,
            TodoSeeder::class,
            TagTodoSeeder::class,
        ]);

        // User::factory(10)->create();
        // User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        // ]);
    }
}
