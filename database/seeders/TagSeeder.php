<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Initial list of tags to create
        $tags = ['csc190', 'csc203', 'csc407', 'csc427', 'ssc101', 'APC', 'Admissions', 'Advising', 'meeting', 'Exam', 'Project', 'Eating', 'Tormenting'];

        // Insert the tags
        foreach ($tags as $tag) {
            // firstOrCreate prevents duplicate inserts if you rerun the seeder
            Tag::firstOrCreate(['name' => $tag, 'is_active' => true]);
        }
    }
}
