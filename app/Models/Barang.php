<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Jenis()
    {
        return $this->belongsto(Jenis::class, 'id_jenis', 'id');
    }

    public function BarangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_barang', 'id');
    }

    public function BarangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang', 'id');
    }
}
