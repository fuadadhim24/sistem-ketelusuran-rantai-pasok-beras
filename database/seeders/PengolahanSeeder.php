<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengolahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'id' => '1',
            'metode' => 'Metode A',
            'deskripsi' => 'Deskripsi Metode A',
            'lama' => 5, // misalnya dalam hari
            'hasil' => '300',
            'id_gudang' => null,
            'id_produksi' => 1,
            'created_at' => 1,
        ],];

        DB::table('pengolahan')->insert($data);
    }
}
