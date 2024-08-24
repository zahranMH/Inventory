<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\supplier;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function barang()
    {
        return $this->belongsto(Barang::class, 'id_barang', 'id');
    }

    public function supplier()
    {
        return $this->belongsto(Supplier::class, 'id_supplier', 'id');
    }
}
