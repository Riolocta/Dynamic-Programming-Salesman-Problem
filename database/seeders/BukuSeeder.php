<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Buku 1',
                'edisi_ke' => 1,
                'penerbit_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}