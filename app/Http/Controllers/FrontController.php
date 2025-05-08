<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function index()
    {
        $produk = Produk::all();
        return view('welcome', compact('produk'));
    }
}
