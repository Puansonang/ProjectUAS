<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\produk_tbl;

class Produk extends Model
{
    public $table = "produk_tbl";
    protected $fillable = [
        'name', 'harga', 'deskripsi', 'kategori', 'galeri'
    ];
}
