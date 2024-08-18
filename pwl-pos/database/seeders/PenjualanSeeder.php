<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Ajeng',
                'penjualan_kode' => 'A',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Dinda',
                'penjualan_kode' => 'D',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Disti',
                'penjualan_kode' => 'DT',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Johan',
                'penjualan_kode' => 'J',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Bintang',
                'penjualan_kode' => 'B',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Tita',
                'penjualan_kode' => 'T',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Ika',
                'penjualan_kode' => 'I',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Sheilla',
                'penjualan_kode' => 'S',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Mifta',
                'penjualan_kode' => 'M',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Leo',
                'penjualan_kode' => 'L',
                'Penjualan_tanggal' => $faker->dateTime('now')
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
