<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['class_name' => 'X RPL 1'],
            ['class_name' => 'XI RPL 1'],
            ['class_name' => 'XII RPL 1'],
        ]);
    }
}
