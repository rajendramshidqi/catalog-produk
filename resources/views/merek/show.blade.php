@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show Data Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('merek.update', $merek->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama_merek" value="{{ $merek->nama_merek }}" disabled>
                                
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection