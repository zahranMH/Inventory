<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Barang()
    {
        return $this->belongsto(Barang::class, 'id_barang', 'id');
    }
}
