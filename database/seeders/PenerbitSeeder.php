<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penerbit')->insert([
            [
                'nama' => 'Penerbit 1',
                'lokasi' => 'Jakarta',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}