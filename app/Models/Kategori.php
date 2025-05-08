<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
     protected $fillable = ['id','kategori'];
    public $timestamp = true;

     public function Kategori()
{
    {
    return $this->hasMany(Kategori::class);
}
}
}   