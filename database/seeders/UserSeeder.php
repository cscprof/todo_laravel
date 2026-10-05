<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'smadeira@geneva.edu'], // Unique identifier check
            [
                'first_name' => 'Scott',
                'last_name' => 'Madeira',
                'password' => Hash::make('asdfasdf'), // Hashes the password securely
            ]
        );

        User::firstOrCreate(
            ['email' => 'bugsbunny@geneva.edu'], // Unique identifier check
            [
                'first_name' => 'Bugs',
                'last_name' => 'Bunny',
                'password' => Hash::make('carrot'), // Hashes the password securely
            ]
        );
    }
}
