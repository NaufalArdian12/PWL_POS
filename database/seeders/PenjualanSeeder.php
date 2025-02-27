<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Ahmad Rizky',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-02-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-02-11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Citra Dewi',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-02-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Dian Pratama',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-02-15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Eka Putri',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-02-18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Fajar Nugraha',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-02-20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Gita Nirmala',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-02-22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Hadi Wibowo',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-02-24',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Indah Pratiwi',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-02-26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Joko Susilo',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-02-28',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('t_penjualans')->insert($data);
    }
}
