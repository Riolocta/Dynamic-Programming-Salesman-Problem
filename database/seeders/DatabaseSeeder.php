<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PenerbitSeeder;
use Database\Seeders\BukuSeeder;
use Database\Seeders\PesananSeeder;
use Database\Seeders\KomunitasSeeder;
use Database\Seeders\KomunitasUserSeeder;
use Database\Seeders\FakultasSeeder;
use Database\Seeders\ProdiSeeder; 

class DatabaseSeeder extends Seeder
{
   public function run(): void
{
    $this->call([
        UserSeeder::class,
        FakultasSeeder::class,
        PenerbitSeeder::class,
        KomunitasSeeder::class,

        ProdiSeeder::class,
        BukuSeeder::class,
        PesananSeeder::class,
        KomunitasUserSeeder::class,
    ]);
}
}