<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 101,
                'harga' => 150000,
                'jumlah' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 102,
                'harga' => 75000,
                'jumlah' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 103,
                'harga' => 200000,
                'jumlah' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 104,
                'harga' => 50000,
                'jumlah' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 105,
                'harga' => 125000,
                'jumlah' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 106,
                'harga' => 300000,
                'jumlah' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 107,
                'harga' => 80000,
                'jumlah' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 108,
                'harga' => 175000,
                'jumlah' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 109,
                'harga' => 225000,
                'jumlah' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 110,
                'harga' => 95000,
                'jumlah' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 111,
                'harga' => 500000,
                'jumlah' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 112,
                'harga' => 35000,
                'jumlah' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('t_penjualan_details')->insert($data);
    }
}
