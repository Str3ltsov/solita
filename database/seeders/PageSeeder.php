<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            ['name' => 'Apie Mus'],
            ['name' => 'ES Projektai'],
            ['name' => 'Paslaugos'],
            ['name' => 'Kontaktai'],
            ['name' => 'Atsijungti']
        ]);
    }
}