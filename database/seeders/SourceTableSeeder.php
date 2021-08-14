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
            'source_name' => 'On The Spot'
        ]);

        DB::table('source')->insert([
            'source_name' => 'Online Travel Agent'
        ]);
    }
}
