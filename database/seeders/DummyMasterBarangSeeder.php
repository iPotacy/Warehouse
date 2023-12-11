<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyMasterBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('m_barang')->insert([
            ['title' => 'kursi', 'status' => 1],
            ['title' => 'meja', 'status' => 1],
        ]);
    }
}
