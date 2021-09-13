<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipe_Finance extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_finance')->insert([
            'nama_finance' => 'Pemasukan',
        ]);

        DB::table('tipe_finance')->insert([
            'nama_finance' => 'Pengeluaran',
        ]);
    }
}
