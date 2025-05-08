@extends('layouts.admin')
@section('content')
     <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <form action="{{ route('merek.update', $merek->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class=mb-2>
                                        <label for="">Nama</label>
                                        <input type="text" name="nama_merek" id="" class="form-control"
                                            value="{{ $merek->nama_merek }}"required>
                                        <button class="btn-secondary" type="submit">simpan</button>
                                    </div>
                            </div>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
@endsection