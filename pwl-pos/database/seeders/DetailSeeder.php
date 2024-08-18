<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 50.000, 
                'jumlah' => 1
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 2,
                'barang_id' => 3, 
                'harga' => 5.000, 
                'jumlah' => 1
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
