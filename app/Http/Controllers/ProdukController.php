<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Merek;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek    = Merek::all();
        $kategori = Kategori::all();
        return view('produk.create', compact('merek', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    $validated = $request->validate([
        'jenis_produk' => 'required|string|max:255',
        'harga'        => 'required|numeric',
        'stok'         => 'required|numeric',
        'deskripsi'    => 'nullable|string',
        'id_merek'     => 'required|exists:mereks,id',
        'id_kategori'  => 'required|exists:kategoris,id',
        'foto'         => 'required|image|mimes:jpg,jpeg,png|max:1024', 
    ]);

    $produk = new Produk();
    $produk->jenis_produk = $request->jenis_produk;
    $produk->harga        = $request->harga;
    $produk->stok         = $request->stok;
    $produk->deskripsi    = $request->deskripsi;
    $produk->id_merek     = $request->id_merek;
    $produk->id_kategori  = $request->id_kategori;

    if ($request->hasFile('foto')) {
        $img  = $request->file('foto');
        $name = rand(1000, 9999) . '_' . time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('storage/produk'), $name);
        $produk->foto = $name;
    }

    $produk->save();

    

        session()->flash('success', 'Data Berhasil ditambahkan');
        return redirect()->route('produk.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk   = Produk::findOrFail($id);
        $merek    = Merek::all();
        $kategori = Kategori::all();

        return view('produk.show', compact('produk', 'merek', 'kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk   = Produk::findOrFail($id);
        $merek    = Merek::all();
        $kategori = Kategori::all();

        return view('produk.edit', compact('produk', 'merek', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'jenis_produk' => 'required|string|max:255',
        'harga'        => 'required|numeric',
        'stok'         => 'required|numeric',
        'deskripsi'    => 'required|string',
        'id_merek'     => 'required|exists:mereks,id',
        'id_kategori'  => 'required|exists:kategoris,id',
        'foto'         => 'nullable|image|mimes:jpg,jpeg,png|max:1024', // max 1MB
    ]);

    // Temukan produk
    $produk = Produk::findOrFail($id);

    // Isi data
    $produk->jenis_produk = $request->jenis_produk;
    $produk->harga        = $request->harga;
    $produk->stok         = $request->stok;
    $produk->deskripsi    = $request->deskripsi;
    $produk->id_merek     = $request->id_merek;
    $produk->id_kategori  = $request->id_kategori;

    // Cek dan simpan foto jika di-upload
    if ($request->hasFile('foto')) {
        $img  = $request->file('foto');
        $name = uniqid() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('storage/produk'), $name);
        $produk->foto = $name;
    }

    // Simpan data
    $produk->save();

    // Redirect dengan pesan sukses
    return redirect()->route('produk.index')->with('success', 'Data berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->foto && Storage::exists('public/produk/' . $produk->poto)) {
            Storage::delete('public/produk/' . $produk->poto);
        }

        $produk->delete();
        return Redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus');
    }
}
