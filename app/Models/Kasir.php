<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{

    use HasFactory;
    public function supplier(){
        return $this->hasOne(supplier::class, 'id_supplier', 'supplier_id');
    }
    protected $primarykey = "id_kasir";
}
