<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some sample data into the faqs table
        DB::table('faqs')->insert([
            [
                'question' => 'What is Lorem Ipsum?',
                'answer' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Why do we use it?',
                'answer' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more FAQ entries as needed
        ]);
    }
}
