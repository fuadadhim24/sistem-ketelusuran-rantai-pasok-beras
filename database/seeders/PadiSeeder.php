<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PadiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'varietas' => 'Ciherang IR 42',
                'karakteristik_hasil' => 'Tekstur rasa pulen',
                'kategori' => 'Rekomendasi',
                'deskripsi' => 'Mayoritas petani di Indonesia dalam melakukan budidaya padi memilih varietas Ciherang IR 42. Tekstur rasa pulen, dengan kelebihan umur padi lebih lama dibandingkan varietas lain.',
                'keunggulan' => 'Tekstur rasa pulen, dengan kelebihan umur padi lebih lama',
                'jenis_musim' => 'Kemarau',
                'lama_tanam' => 125,
                'ketahanan_hama_penyakit' => 'rawan terhadap penyakit x dan c',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => '2',
                'varietas' => 'Ciherang IR 64',
                'karakteristik_hasil' => 'Tekstur rasa pulen',
                'kategori' => 'Selalu',
                'deskripsi' => 'Mayoritas petani di Indonesia dalam melakukan budidaya padi memilih varietas Ciherang IR 64. Tekstur rasa pulen, dengan kelebihan umur padi lebih lama dibandingkan varietas lain.',
                'keunggulan' => 'Tekstur rasa pulen, dengan kelebihan umur padi lebih lama',
                'jenis_musim' => 'Hujan',
                'lama_tanam' => 125,
                'ketahanan_hama_penyakit' => 'rawan terhadap penyakit x dan c',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => '3',
                'varietas' => 'Inpari 30',
                'karakteristik_hasil' => 'Beras lebih panjang dan berat',
                'kategori' => 'Rekomendasi',
                'deskripsi' => 'Inpari 30 memiliki beras yang lebih panjang dan berat dibandingkan varietas lain. Cocok untuk ditanam di daerah dengan curah hujan tinggi.',
                'keunggulan' => 'Beras lebih panjang dan berat',
                'jenis_musim' => 'Hujan',
                'lama_tanam' => 130,
                'ketahanan_hama_penyakit' => 'Tahan terhadap penyakit padi seperti blas',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => '4',
                'varietas' => 'Inpari 32',
                'karakteristik_hasil' => 'Beras lebih tahan terhadap hama dan penyakit',
                'kategori' => 'Rekomendasi',
                'deskripsi' => 'Inpari 32 memiliki beras yang lebih tahan terhadap hama dan penyakit, serta menghasilkan hasil panen yang stabil.',
                'keunggulan' => 'Beras lebih tahan terhadap hama dan penyakit',
                'jenis_musim' => 'Kemarau',
                'lama_tanam' => 120,
                'ketahanan_hama_penyakit' => 'Tahan terhadap hama seperti wereng dan penyakit seperti blas',
                'created_at' => now(),
                'updated_at' => null,
            ],

        ];
        DB::table('padi')->insert($data);
    }
}
