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
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '2',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '3',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '4',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '5',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '6',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '7',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '8',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '9',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '10',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '11',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '12',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '13',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
        DB::table('inventorys')->insert([
            'inventory_type' => '14',
            'jumlah' => 0,
            'tambah' => 0,
            'kurang' => 0
        ]);
    }
}
