<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teacher')->insert([
            ['nik' => '1234567891234567', 'fullname' => 'Ruth Natalia', 'dob' => '2008-06-23', 'major_id' => 1, 'class_id' => 5]
        ]);
    }
}
