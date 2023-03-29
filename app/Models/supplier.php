<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    public function barangs()
    {
        return $this->belongsTo(barang::class, 'id_supplier', 'id_barang');
    }

    protected $table = "suppliers";
    protected $primaryKey = 'id_supplier';
    protected $fillable = [
        'nama_supplier',
        'nama_warung',
    ];
}
