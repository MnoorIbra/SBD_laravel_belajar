<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = ['id_produk'];
    protected $primaryKey = 'id_produk';
    protected $foreignId = 'id_admin';
}
