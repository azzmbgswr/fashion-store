<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    
protected $fillable = [
    'nama',
    'jenis',
    'harga',
];
protected $primaryKey = 'id_product';
}
