@extends('layouts.admin')
@section('content')
  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class=mb-2>
                                        <label for="">Nama</label>
                                        <input type="text" name="kategori" id="" class="form-control"
                                            value="{{ $kategori->kategori }}"required>
                                        <button class="btn-secondary" type="submit">simpan</button>
                                    </div>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
@endsection