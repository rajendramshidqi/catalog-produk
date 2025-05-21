@extends('layouts.frontend')

@section('content')
<div class="container mt-4">
    <h4>Hasil pencarian untuk: <strong>{{ $keyword }}</strong></h4>

    <div class="row mt-4">
        @forelse($produk as $data)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($data->foto)
                <img src="{{ asset('storage/produk/' . $data->foto) }}" class="card-img-top" alt="{{ $data->jenis_produk }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $data->jenis_produk }}</h5>
                    <p class="card-text">Rp{{ number_format($data->harga, 0, ',', '.') }}</p>
                    <a href="{{ route('details', $data->id) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">Produk tidak ditemukan.</p>
        @endforelse
    </div>
</div>
@endsection
