<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class')->insert([
            // RPL
            ['nama_kelas' => 'X RPL 1'],
            ['nama_kelas' => 'X RPL 2'],
            ['nama_kelas' => 'XI RPL 1'],
            ['nama_kelas' => 'XI RPL 2'],
            ['nama_kelas' => 'XI RPL 3'],
            ['nama_kelas' => 'XII RPL 1'],
            ['nama_kelas' => 'XII RPL 2'],
            // TITL
            ['nama_kelas' => 'X TITL 1'],
            ['nama_kelas' => 'X TITL 2'],
            ['nama_kelas' => 'XI TITL 1'],
            ['nama_kelas' => 'XI TITL 2'],
            ['nama_kelas' => 'XII TITL 1'],
            ['nama_kelas' => 'XII TITL 2']
        ]);
    }
}
