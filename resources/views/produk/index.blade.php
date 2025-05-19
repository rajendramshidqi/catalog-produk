@extends('layouts.admin')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar</h1>


                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama produk</th>
                                <th scope="col">merek</th>
                                <th scope="col">jenis Sepatu</th>
                                <th scope="col">Harga</th>
                                <th scope="col">deskripsi</th>

                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($produk as $data)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td scope="row">{{ $data->jenis_produk }}</td>
                                    <td scope="row">{{ $data->merek->nama_merek }}</td>
                                    <td scope="row">{{ $data->kategori->kategori }}</td>
                                    <td scope="row">{{ number_format($data->harga, 0, ',', '.') }}</td>
                                    <td scope="row">{{ $data->deskripsi }}</td>
                                    <td scope="row">
                                        <img src="{{ asset('storage/produk/' . $data->foto) }}" alt=""
                                            style="width: 50px; height: 50px;">
                                    </td>
                                    <th>
                                        <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-success">edit</a>
                                            <a href="{{ route('produk.show', $data->id) }}" class="btn btn-warning">show</a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda Yakin')">DELETE</button>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div>
@endsection
