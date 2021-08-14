<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeRuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_ruangan')->insert([
            'type' => 'Standard Room',
            'price' => 250000
        ]);

        DB::table('tipe_ruangan')->insert([
            'type' => 'Deluxe Room',
            'price' => 300000
        ]);
    }
}
