<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TandaPengenalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tanda_pengenal')->insert([
            'type_tanda_pengenal' => 'KTP'
        ]);

        DB::table('tanda_pengenal')->insert([
            'type_tanda_pengenal' => 'SIM'
        ]);

        DB::table('tanda_pengenal')->insert([
            'type_tanda_pengenal' => 'PASSPORT'
        ]);
    }
}
