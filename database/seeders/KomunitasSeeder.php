<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomunitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komunitas')->insert([
            [
                'nama'          =>  'komunitas 1',
                'created_at'     =>  date("Y-m-d H:i:s")
            ],
            [
                'nama'          => 'komunitas 2',
                'created_at'     => date("Y-m-d H:i:s")
            ],
        ]);
    }
}