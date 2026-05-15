<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomunitasUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komunitas_user')->insert([
            [
                'user_id'       =>  1,
                'komunitas_id'  =>  1,
                'created_at'    =>  date("Y-m-d H:i:s")
            ],
            [
                'user_id'       =>  1,
                'komunitas_id'  =>  1,
                'created_at'    =>  date("Y-m-d H:i:s")
            ],
        ]);
    }
}
