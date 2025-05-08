@extends('layouts.admin')
@section('content')
  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <form action="{{ route('produk.update', $produk->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama">Nama Produk</label>
                                        <input type="text" class="form-control" name="nomor"
                                            value="{{ $produk->jenis_produk }}" disabled>
                                        <label for="">id pengguna</label>
                                        <select class="form-control" name="id_merek">
                                            @foreach ($merek as $data)
                                                <option
                                                    value="{{ $data->id }}"{{ $data->id == $produk->id_merek ? 'selected' : '' }}>
                                                    {{ $data->nama_merek }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="">id pengguna</label>
                                    <select class="form-control" name="id_kategori">
                                        @foreach ($kategori as $data)
                                            <option
                                                value="{{ $data->id }}"{{ $data->id == $produk->id_kategori ? 'selected' : '' }}>
                                                {{ $data->kategori }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="nama">harga</label>
                                <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}"
                                    disabled>

                            </div>
                            <div class="form-group">
                                <label for="nama">deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi"
                                    value="{{ $produk->deskripsi }}" disabled>

                            </div>
                            <div class="form-group">
                                <label for="nama">stok</label>
                                <input type="number" class="form-control" name="stok" value="{{ $produk->stok }}"
                                    disabled>

                              
                            </div>
                            <div>
                                  <td>
                                    @if ($produk->foto)
                                        <img src="{{ Storage::url('produk/' . $produk->foto) }}" alt="Foto Produk"
                                            class="img-thumbnail" width="150">
                                    @else
                                        <p>Tidak ada foto</p>
                                    @endif
                                </td>
                            </div>
                            <div>
                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>

                            </div>
                             
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
@endsection