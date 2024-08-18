<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'NNS',
                'barang_nama' => 'Nanas',
                'harga_jual' => 50.000,
                'harga_beli' => 45.000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ALP',
                'barang_nama' => 'Alpukat',
                'harga_jual' => 40.000,
                'harga_beli' => 35.000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'LYS',
                'barang_nama' => 'Lays',
                'harga_jual' => 5.000,
                'harga_beli' => 4.000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'CTT',
                'barang_nama' => 'Chitato',
                'harga_jual' => 5.000,
                'harga_beli' => 4.000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'NSP',
                'barang_nama' => 'Nasi Padang',
                'harga_jual' => 10.000,
                'harga_beli' => 8.000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'AGP',
                'barang_nama' => 'Ayam Geprek',
                'harga_jual' => 13.000,
                'harga_beli' => 10.000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'CC',
                'barang_nama' => 'Coca Cola',
                'harga_jual' => 5.000,
                'harga_beli' => 4.000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'FT',
                'barang_nama' => 'Fanta',
                'harga_jual' => 5.000,
                'harga_beli' => 4.000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'GD',
                'barang_nama' => 'Good Day',
                'harga_jual' => 8.000,
                'harga_beli' => 6.000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'TB',
                'barang_nama' => 'ToraBika',
                'harga_jual' => 6.000,
                'harga_beli' => 5.000
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
