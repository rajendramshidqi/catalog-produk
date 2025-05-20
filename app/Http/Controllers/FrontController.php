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

    public function shop()
    {
        $produk = Produk::all();
        return view('shop', compact('produk'));
    }
    public function show($id)
    {
        $produk = Produk::with('merek')->findOrFail($id);
        return view('details', compact('produk'));
    }
    
    

    
}
