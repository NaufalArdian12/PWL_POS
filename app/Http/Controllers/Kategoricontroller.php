<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kategoricontroller extends Controller
{
    public function index () {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_name' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategoris')->insert($data);
        // return 'insert data baru berhasil';

        // $row= DB::table('m_kategoris')->where('kategori_kode', 'SNK')->update(['kategori_name' => 'Camilan']);
        // return 'Update data berhasil, Jumlah data yang diupdate: ' . $row . ' baris';

        $data = DB::table('m_kategoris')->get();
        return view('kategori', ['data' => $data]);
    }
}
