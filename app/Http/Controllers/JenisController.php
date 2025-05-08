<?php
namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        return view('jenis.create', compact('jenis'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis             = new Jenis();
        $jenis->jenis = $request->jenis;
        $jenis->save();

        session()->flash('succes', 'Data Berhasil Ditambahkan');
        return redirect()->route('jenis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jenis::findorFail($id);
        return view('jenis.show', compact('jenis'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('jenis.edit', compact('jenis'));
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
        $jenis             = Jenis::findOrFail($id);
        $jenis->jenis = $request->jenis;
        $jenis->save();

        session()->flash('succes', 'Data Berhasil Ditambahkan');
        return redirect()->route('jenis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();
        return Redirect()->route('jenis.index')->with('succes', 'Data Berhasil Dihapus');
    }
}
