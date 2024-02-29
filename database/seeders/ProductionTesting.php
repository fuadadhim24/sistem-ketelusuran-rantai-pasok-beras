<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionTesting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('production_testing')->insert([
            'id_production' => rand(0,100),
            'broken_rice' => 20,
            'small_broken_rice' => 12,
        ]);
    }
}
