<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'B1',
                'kategori_nama' => 'Buah'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'S1',
                'kategori_nama' => 'Snack'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'M1',
                'kategori_nama' => 'Makanan Berat'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'MB1',
                'kategori_nama' => 'Minuman Bersoda'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'K1',
                'kategori_nama' => 'Kopi'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
