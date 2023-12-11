<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyMasterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_status')->insert([
            ['title' => 'Masuk', 'status' => 1],
            ['title' => 'Keluar', 'status' => 1],
        ]);
    }
}
