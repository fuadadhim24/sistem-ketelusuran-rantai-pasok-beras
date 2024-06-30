<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_gudang' => 'Gudang A',
                'lokasi' => 'Jalan Gudang A No. 1',
                'kapasitas' => 1000, // misalnya dalam ton
                'luas' => 500, // misalnya dalam meter persegi
                'status' => 'Aktif',
                'latitude' => -6.200000, // contoh koordinat latitude
                'longitude' => 106.816666, // contoh koordinat longitude
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'nama_gudang' => 'Gudang B',
                'lokasi' => 'Jalan Gudang B No. 2',
                'kapasitas' => 800,
                'luas' => 400,
                'status' => 'Aktif',
                'latitude' => -6.210000,
                'longitude' => 106.820000,
                'created_at' => now(),
                'updated_at' => null,
            ],
        ];

        DB::table('gudang')->insert($data);
    }
}
