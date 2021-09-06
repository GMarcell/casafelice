<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventorys')->insert([
            'inventory_type' => '1',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '2',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '3',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '4',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '5',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '6',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '7',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '8',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '9',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '10',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '11',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '12',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '13',
            'banyak_barang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '14',
            'banyak_barang' => 0
        ]);
    }
}
