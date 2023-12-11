<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyMasterTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_transaction')->insert([
            ['title' => 'Barang Masuk', 'status' => 1],
            ['title' => 'Barang Keluar', 'status' => 1],
        ]);
    }
}
