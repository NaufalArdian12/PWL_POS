<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'kategori_id' => 1,
                'kategori_kode' => 'GDT',
                'kategori_name' => 'Gadget',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PKK',
                'kategori_name' => 'Pokok',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'JJN',
                'kategori_name' => 'Jajan',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'AKS',
                'kategori_name' => 'Aksesoris',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'FTR',
                'kategori_name' => 'Furniture',
            ],
        ];
        DB::table('m_kategoris')->insert($data);
    }
}
