<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Insert user siswa
        DB::table('users')->insert([
            'name' => 'Siswa Random',
            'email' => rand().'@sija.com', // contoh NIS
            'password' => Hash::make('password'),
        ]);

        // Insert user guru
        DB::table('users')->insert([
            'name' => 'Guru Test',
            'email' => 'guru@sija.com',
            'password' => Hash::make('password'),
        ]);
    }
}

