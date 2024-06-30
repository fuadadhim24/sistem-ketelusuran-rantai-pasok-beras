<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'sumber_benih' => 'Pt Indo',
                'tanggal_produksi' => '2024-03-30 00:00:00',
                'tanggal_kedaluwarsa' => '2024-06-30 00:00:00',
                'tingkat_kemurnian' => 50,
                'tingkat_vigor' => 60,
                'jumlah_benih' => 30,
                'tanggal_penyemaian' => '2024-06-30 06:27:12',
                'tanggal_penanaman' => '2024-06-30 06:35:17',
                'id_padi' => 1,
                'id_lahan' => 1,
                'id_user' => null, 
                'created_at' => now(),
                'updated_at' => null,
            ],
        ];
        DB::table('produksi')->insert($data);
    }
}
