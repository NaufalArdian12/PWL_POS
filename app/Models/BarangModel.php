<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Tambahkan jika perlu soft delete

class BarangModel extends Model
{
    use HasFactory;
    // use SoftDeletes; // Uncomment jika butuh soft delete

    protected $table = 'm_barangs';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'kategori_id',
        'barang_kode',
        'barang_nama',
        'harga_beli',
        'harga_jual',
        'stok',
        'image', // Pastikan kolom 'image' ada di tabel
    ];

    // protected $dates = ['deleted_at']; // Uncomment jika pakai soft delete

    /**
     * Relasi ke model Kategori
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

    /**
     * Relasi ke stok (jika diperlukan)
     */
    public function stoks()
    {
        return $this->hasMany(StokModel::class, 'barang_id', 'barang_id');
    }

    /**
     * Handler untuk menghapus relasi sebelum delete
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($barang) {
            // Hapus stok terkait jika ada relasi
            if (method_exists($barang, 'stoks')) {
                $barang->stoks()->delete();
                // atau $barang->stoks()->update(['barang_id' => null]);
            }
        });
    }
}