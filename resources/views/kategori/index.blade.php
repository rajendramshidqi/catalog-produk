@extends('layouts.admin')
@section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Merek</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary"
                                    style="float:right">Tambah</a>

                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">kategori</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($kategori as $data)
                                            <tr>
                                                <td scope="row">{{ $no++ }}</td>
                                                <td scope="row">{{ $data->kategori }}</td>
                                                <th>
                                                    <form action="{{ route('kategori.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('kategori.edit', $data->id) }}"
                                                            class="btn btn-success">edit</a>
                                                        <a href="{{ route('kategori.show', $data->id) }}"
                                                            class="btn btn-warning">show</a>
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin')">DELETE</button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
@endsection
