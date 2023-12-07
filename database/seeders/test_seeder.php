<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('test')->insert([
                [
                    'name' => 'John Doe',
                    'email' => 'john@example.com',
                    'password' => Hash::make('password123'),
                ],
                [
                    'name' => 'Jane Doe',
                    'email' => 'jane@example.com',
                    'password' => Hash::make('password456'),
                ],
                // Add more users as needed
        ]);
    }
}
