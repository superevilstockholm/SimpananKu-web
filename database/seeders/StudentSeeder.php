<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
           ['nisn' => '0012345678', 'fullname' => 'Malikha Regina', 'dob' => '2008-06-23', 'major_id' => 1, 'class_id' => 5],
           ['nisn' => '0099999999', 'fullname' => 'Regina Putri Goen', 'dob' => '2008-06-23', 'major_id' => 1, 'class_id' => 5]
        ]);
    }
}
