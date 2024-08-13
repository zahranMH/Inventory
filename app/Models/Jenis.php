<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Jenis extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Barang() 
    {
        return $this->hashMany(Barang::class, 'id_jenis', 'id');
    }
}
