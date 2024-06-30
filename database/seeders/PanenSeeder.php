<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PanenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'quantity' => 100, // Ganti dengan jumlah panen yang sesuai
                'metode_panen' => 'Manual', // Ganti dengan metode panen yang sesuai
                'catatan' => 'Panen kali pertama', // Catatan tambahan jika ada
                'id_user' => null, // Ganti dengan ID user yang sesuai jika ada
                'id_produksi' => 1, // Ganti dengan ID produksi yang sesuai
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => null,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Insert data ke dalam tabel panen
        DB::table('panen')->insert($data);
    }
}
