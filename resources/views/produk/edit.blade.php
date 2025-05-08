@extends('layouts.admin')
@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Produk</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <form action="{{ route('produk.update', $produk->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-grup">
                                        <label>nama produk</label>
                                        <input type="text" class="form-control" name="jenis_produk"
                                            value="{{ $produk->jenis_produk }}">
                                    </div>
                                    <div class=mb-2>
                                        <label for="">id merek</label>
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
                                    <div class="form-grup">
                                        <label>harga</label>
                                        <input type="text" class="form-control" name="harga"
                                            value="{{ $produk->harga }}">
                                    </div>
                                     <div class="form-grup">
                                        <label>Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi"
                                        value="{{ $produk->deskripsi }}">
                                        
                                    </div>
                                    <div class="form-grup">
                                        <label>stok</label>
                                        <input type="text" class="form-control" name="stok"
                                            value="{{ $produk->stok }}">
                                    </div>

                                    <div class="mb-2">
                                        <label for="">Poto</label>
                                        <input type="file" name="foto" id=""
                                            class="form-control @error('foto') is-invalid @enderror">
                                        @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
@endsection