<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeInventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_type')->insert([
            'inventory_name' => 'Kamar',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Perlangkapan Mandi',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Listrik',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Alat Komunikasi',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Tuang Tamu & Ruang Bersama',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Receptionis',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Dapur',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Laundy',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Meja & Kursi',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Cadangan Material Gedung',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Transportasi',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Assesoris',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Kunci Bangunan dll',
            'jumlah' => 0
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Lainnya',
            'jumlah' => 0
        ]);
    }
}
