@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Produk</h1>

                <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- Jenis Produk --}}
                    <div class="mb-3">
                        <label for="jenis_produk">Jenis Produk</label>
                        <input type="text" id="jenis_produk" name="jenis_produk"
                            class="form-control @error('jenis_produk') is-invalid @enderror"
                            value="{{ old('jenis_produk', $produk->jenis_produk) }}">
                        @error('jenis_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Merek --}}
                    <div class="mb-3">
                        <label for="id_merek">Merek</label>
                        <select id="id_merek" name="id_merek"
                            class="form-control @error('id_merek') is-invalid @enderror">
                            <option value="">-- Pilih Merek --</option>
                            @foreach ($merek as $data)
                                <option value="{{ $data->id }}"
                                    {{ old('id_merek', $produk->id_merek) == $data->id ? 'selected' : '' }}>
                                    {{ $data->nama_merek }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_merek')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kategori --}}
                    <div class="mb-3">
                        <label for="id_kategori">Kategori</label>
                        <select id="id_kategori" name="id_kategori"
                            class="form-control @error('id_kategori') is-invalid @enderror">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}"
                                    {{ old('id_kategori', $produk->id_kategori) == $data->id ? 'selected' : '' }}>
                                    {{ $data->kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Stok --}}
                    <div class="mb-3">
                        <label for="stok">Stok</label>
                        <input type="number" id="stok" name="stok"
                            class="form-control @error('stok') is-invalid @enderror"
                            value="{{ old('stok', $produk->stok) }}">
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Harga --}}
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" id="harga" name="harga"
                            class="form-control @error('harga') is-invalid @enderror"
                            value="{{ old('harga', $produk->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Foto --}}
                    <div class="mb-3">
                        <label for="foto">Foto</label>
                        @if ($produk->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/produk/' . $produk->foto) }}"
                                    alt="Foto Produk" class="img-thumbnail" width="150">
                            </div>
                        @endif
                        <input type="file" id="foto" name="foto"
                            class="form-control @error('foto') is-invalid @enderror">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tombol --}}
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
