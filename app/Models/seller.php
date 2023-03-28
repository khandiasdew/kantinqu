<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;
    protected $table = "sellers";
    protected $primaryKey = 'id_seller';
    protected $fillable = [
        'nama_seller',
        'kelas',
        'no_absen',
    ];
}
