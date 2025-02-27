<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            // Kategori 1 - Gadget (GDT)
            [
                'kategori_id' => 1,
                'barang_kode' => 'GDT001',
                'barang_nama' => 'Smartphone Samsung Galaxy S23',
                'harga_beli' => 9000000,
                'harga_jual' => 11500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'GDT002',
                'barang_nama' => 'Laptop Asus ROG',
                'harga_beli' => 15000000,
                'harga_jual' => 18500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kategori 2 - Pokok (PKK)
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKK001',
                'barang_nama' => 'Beras Premium 5kg',
                'harga_beli' => 60000,
                'harga_jual' => 68000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKK002',
                'barang_nama' => 'Minyak Goreng 2L',
                'harga_beli' => 35000,
                'harga_jual' => 42000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kategori 3 - Jajan (JJN)
            [
                'kategori_id' => 3,
                'barang_kode' => 'JJN001',
                'barang_nama' => 'Coklat Silverqueen',
                'harga_beli' => 18000,
                'harga_jual' => 23000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'JJN002',
                'barang_nama' => 'Chitato Jumbo',
                'harga_beli' => 15000,
                'harga_jual' => 19500,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kategori 4 - Aksesoris (AKS)
            [
                'kategori_id' => 4,
                'barang_kode' => 'AKS001',
                'barang_nama' => 'Gelang Silver',
                'harga_beli' => 75000,
                'harga_jual' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'AKS002',
                'barang_nama' => 'Kalung Titanium',
                'harga_beli' => 120000,
                'harga_jual' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kategori 5 - Furniture (FTR)
            [
                'kategori_id' => 5,
                'barang_kode' => 'FTR001',
                'barang_nama' => 'Meja Belajar Minimalis',
                'harga_beli' => 450000,
                'harga_jual' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'FTR002',
                'barang_nama' => 'Kursi Gaming',
                'harga_beli' => 1200000,
                'harga_jual' => 1750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data tambahan untuk mencapai minimal 10 data
            [
                'kategori_id' => 1,
                'barang_kode' => 'GDT003',
                'barang_nama' => 'Tablet iPad Pro',
                'harga_beli' => 12000000,
                'harga_jual' => 14500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'AKS003',
                'barang_nama' => 'Jam Tangan Digital',
                'harga_beli' => 350000,
                'harga_jual' => 499000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_barangs')->insert($data);
    }
}
