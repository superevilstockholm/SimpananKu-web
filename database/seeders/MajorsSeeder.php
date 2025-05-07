<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            ['major_name' => 'Rekayasa Perangkat Lunak'],
            ['major_name' => 'Teknik Instalasi Tenaga Listrik'],
            ['major_name' => 'Mesin Industri']
        ]);
    }
}
