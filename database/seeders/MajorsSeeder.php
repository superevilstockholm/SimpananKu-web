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
        DB::table('major')->insert([
            ['name' => 'Rekayasa Perangkat Lunak'],
            ['name' => 'Teknik Instalasi Tenaga Listrik'],
            ['name' => 'Teknik Mesin Industri']
        ]);
    }
}
