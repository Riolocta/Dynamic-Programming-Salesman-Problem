<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert([
            ['nama'  => 'Informatika','fakultas_id'=> 1],
            ['nama'  => 'Sistem Informasi','fakultas_id'=> 1],
            ['nama'  => 'Teknik Elektro','fakultas_id'=> 1],
            ['nama'  => 'Peternakan','fakultas_id'=> 2], 
            ['nama'  => 'Pemanfaatan Sumberdaya Perikanan','fakultas_id'=> 2],
        ]); 
    }
}
