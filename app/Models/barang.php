<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    public function supplier()
    {
        return $this->hasOne(supplier::class, 'id_supplier');
    }
    protected $table = "barangs";
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'jumlah_barang',
        'id_supplier',
    ];
}

