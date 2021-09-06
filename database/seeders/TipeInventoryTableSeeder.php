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
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Perlangkapan Mandi',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Listrik',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Alat Komunikasi',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Tuang Tamu & Ruang Bersama',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Receptionis',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Dapur',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Laundy',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Meja & Kursi',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Cadangan Material Gedung',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Transportasi',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Assesoris',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Kunci Bangunan dll',
        ]);

        DB::table('inventory_type')->insert([
            'inventory_name' => 'Lainnya',
        ]);
    }
}
