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
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">kategori sepatu</label>
                                <input type="text" class="form-control" name="kategori" value="{{ $kategori->kategori }}" disabled>
                                
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection