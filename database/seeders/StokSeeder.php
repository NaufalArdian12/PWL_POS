<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            // Kategori 1 - Gadget (GDT)
            [
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],
            [
                'barang_id' => 1,
                'user_id' => 2,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],

            // Kategori 2 - Pokok (PKK)
            [
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],
            [
                'barang_id' => 2,
                'user_id' => 2,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],

            // Kategori 3 - Jajan (JJN)
            [
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],
            [
                'barang_id' => 3,
                'user_id' => 2,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],

            // Kategori 4 - Aksesoris (AKS)
            [
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],
            [
                'barang_id' => 4,
                'user_id' => 2,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],

            // Kategori 5 - Furniture (FTR)
            [
                'barang_id' => 5,
                'user_id' => 1,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],
            [
                'barang_id' => 5,
                'user_id' => 2,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ],

            // Data tambahan untuk mencapai minimal 10 data
            [
                'barang_id' => 1,
                'user_id' => 3,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,

            ],
            [
                'barang_id' => 4,
                'user_id' => 3,
                'stok_tanggal' => '2025-05-12',
                'stok_jumlah' => 250,
            ]
        ];

        DB::table('t_stoks')->insert($data);
    }
}
