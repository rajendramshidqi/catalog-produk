@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PENDAFTARAN</h1>

                {{-- Alert sukses --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Alert error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Data gagal disimpan. Silakan periksa input Anda.
                    </div>
                @endif

                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Jenis Produk --}}
                    <div class="mb-2">
                        <label for="jenis_produk">Jenis Produk</label>
                        <input type="text" name="jenis_produk" id="jenis_produk"
                            value="{{ old('jenis_produk') }}"
                            class="form-control @error('jenis_produk') is-invalid @enderror" required>
                        @error('jenis_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Merek --}}
                    <div class="mb-2">
                        <label for="id_merek">Merek</label>
                        <select name="id_merek" id="id_merek"
                            class="form-control @error('id_merek') is-invalid @enderror" required>
                            <option value="">-- Pilih Merek --</option>
                            @foreach ($merek as $data)
                                <option value="{{ $data->id }}" {{ old('id_merek') == $data->id ? 'selected' : '' }}>
                                    {{ $data->nama_merek }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_merek')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Kategori --}}
                    <div class="mb-2">
                        <label for="id_kategori">Kategori</label>
                        <select name="id_kategori" id="id_kategori"
                            class="form-control @error('id_kategori') is-invalid @enderror" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}" {{ old('id_kategori') == $data->id ? 'selected' : '' }}>
                                    {{ $data->kategori }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Harga --}}
                    <div class="mb-2">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga"
                            value="{{ old('harga') }}"
                            class="form-control @error('harga') is-invalid @enderror" required>
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            rows="4" required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Stok --}}
                    <div class="mb-2">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" id="stok"
                            value="{{ old('stok') }}"
                            class="form-control @error('stok') is-invalid @enderror" required>
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Foto --}}
                    <div class="mb-2">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto"
                            class="form-control @error('foto') is-invalid @enderror" required>
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tombol Submit --}}
                    <div class="mb-2">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="index"></a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
