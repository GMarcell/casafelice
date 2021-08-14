<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenderTableSeeder::class,
            SourceTableSeeder::class,
            TandaPengenalTableSeeder::class,
            TipeInventoryTableSeeder::class,
            TipeRuanganTableSeeder::class
        ]);
    }
}
