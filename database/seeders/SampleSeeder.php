<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("samples")->insert([
            'sample_name' => "Harry Potter", 
            'sample_type' => "Book", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("samples")->insert([
            'sample_name' => "Spiderwick", 
            'sample_type' => "Movie", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
