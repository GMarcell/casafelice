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
            'type' => stringValue('Standard Room'),
            'price' => integerValue(250000)
        ], [
            'type' => stringValue('Deluxe Room'),
            'price' => integerValue(300000)
        ]);
    }
}
