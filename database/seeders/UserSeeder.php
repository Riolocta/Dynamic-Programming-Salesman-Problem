<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
{
    DB::table('users')->insert([
        [
            'name'       => 'Riolocta Lukie Ramadian',
            'email'      => 'rioloctalukieramadian@gmail.com',
            'password'   => Hash::make('lukie2005'),
            'created_at' => date("2005-10-10 H:i:s")
        ]
    ]);
}
    }
}
