@extends('layouts.admin')
@section('content')
   <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-grup">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" name="jenis_produk">
                                        <div class=mb-2>
                                            <label for="">id kategori</label>
                                            <select class="form-control" name="id_merek">
                                                @foreach ($merek as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_merek }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class=mb-2>
                                            <label for="">id kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-grup">
                                        <label>Harga</label>
                                        <input type="number" class="form-control" name="harga">
                                    </div>
                                    <div class="form-grup">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi">
                                    </div>
                                    <div class="form-grup">
                                        <label>stok</label>
                                        <input type="text" class="form-control" name="stok">
                                    </div>
                                    <div class="mb-2">
                                        <label for="">Poto</label>
                                        <input type="file" name="foto" id=""
                                            class="form-control @error('foto') is-invalid @enderror">
                                        @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">save</button>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
@endsection