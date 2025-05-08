<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','jenis_produk','harga','deskripsi','stok','id_merek','id_kategori','foto'];
    public $timestamp = true;

   

public function Merek()
{
    return $this->belongsTo(Merek::class, 'id_merek');
}
public function Kategori()
{
    return $this->belongsTo(Kategori::class, 'id_kategori');
}

}
