<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_action_type')->insert([
            'inventory_action_name' => 'Barang Masuk'
        ]);

        DB::table('inventory_action_type')->insert([
            'inventory_action_name' => 'Barang Keluar'
        ]);
    }
}
