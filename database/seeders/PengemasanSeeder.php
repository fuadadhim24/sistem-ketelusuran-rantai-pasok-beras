<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengemasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'id' => '1',
            'jenis_kemasan' => 'Karung',
            'berat_kemasan' => 30,
            'jumlah_kemasan' => 120,
            'qr_code' => 'http://127.0.0.1:8000/hasil-pengolahan-in/1',
            'id_pengolahan' => 1,
            'created_at' => now(),
            'updated_at' => null,
        ]];

        DB::table('pengemasan')->insert($data);
    }
}
