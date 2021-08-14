<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('source')->insert([
            'source_name' => stringValue('On The Spot')
        ], [
            'source_name' => stringValue('Online Travel Agent')
        ]);
    }
}
