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
        DB::table('invemtory_type')->insert([
            'inventory_name' => stringValue('Kamar')
        ], [
            'inventory_name' => stringValue('Perlangkapan Mandi')
        ], [
            'inventory_name' => stringValue('Listrik')
        ], [
            'inventory_name' => stringValue('Alat Komunikasi')
        ], [
            'inventory_name' => stringValue('Tuang Tamu & Ruang Bersama')
        ], [
            'inventory_name' => stringValue('Receptionis')
        ], [
            'inventory_name' => stringValue('Dapur')
        ], [
            'inventory_name' => stringValue('Laundy')
        ], [
            'inventory_name' => stringValue('Mejad & Kursi')
        ], [
            'inventory_name' => stringValue('Cadangan Material Gedung')
        ], [
            'inventory_name' => stringValue('Transportasi')
        ], [
            'inventory_name' => stringValue('Assesoris')
        ], [
            'inventory_name' => stringValue('Kunci Bangunan dll')
        ], [
            'inventory_name' => stringValue('Lainnya')
        ]);
    }
}
