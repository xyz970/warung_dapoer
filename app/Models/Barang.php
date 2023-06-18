<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Barang extends Model
{
    use softDeletes;
    protected $table = 'barangs';
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    // Metode akses untuk mendapatkan URL gambar
    public function getGambarUrlAttribute()
    {
        return asset('images\products' . $this->barang);

    }
    public function transaksi_detail() {
        return $this->hasOne(TransaksiDetail::class);
    }
    public function kategori() {
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
}
