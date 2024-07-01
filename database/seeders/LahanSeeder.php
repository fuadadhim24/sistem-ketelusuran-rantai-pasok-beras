<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'nama_lahan' => 'Lahan A',
                'detail_lokasi' => 'Depan rumah pak ben',
                'luas' => 100,
                'latitude' => 113.72278554464394,
                'longitude' => -8.157482025907571,
                'jenis_tanah' => 'Tanah Gembur',
                'id_user' => null,
                'created_at' => '2024-06-30 06:19:56',
                'updated_at' => null,
            ],
            [
                'id' => '2',
                'nama_lahan' => 'Lahan B',
                'detail_lokasi' => 'f',
                'luas' => 10,
                'latitude' => 113.72278554464394,
                'longitude' => -8.157482025907571,
                'jenis_tanah' => 'Tanah Gembur',
                'id_user' => null,
                'created_at' => '2024-06-30 06:25:54',
                'updated_at' => null,
            ],
        ];
        DB::table('lahan')->insert($data);
        
    }
}
