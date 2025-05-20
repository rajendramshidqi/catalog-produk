@extends('layouts.frontend')

@section('content')
    <section class="single_product_details_area py-5" style="background: #f9f9f9;">
        <div class="container">
            <div class="row bg-white shadow rounded-4 p-4">

                <!-- Gambar Produk -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    @if ($produk->foto)
                        <img src="{{ asset('storage/produk/' . $produk->foto) }}" alt="{{ $produk->jenis_produk }}"
                            class="img-fluid rounded-4 border" style="max-width: 100%; height: 500px; object-fit: contain;">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center rounded"
                            style="width: 100%; height: 400px;">
                            Tidak ada gambar
                        </div>
                    @endif
                </div>

                <!-- Detail Produk -->
                <div class="col-md-6">
                    <div class="single_product_desc">
                        <h3 class="fw-bold mb-2">{{ $produk->jenis_produk }}</h3>
                        <p class="mb-1 text-muted">Merek: <strong>{{ $produk->merek->nama_merek }}</strong></p>
                        <p class="mb-1 text-muted">Kategori: <strong>{{ $produk->kategori->kategori ?? '-' }}</strong>
                        </p>
                        <p class="mb-3 text-muted">Stok: <strong>{{ $produk->stok }}</strong></p>

                        <h4 class="text-success mb-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <h6 class="fw-bold">Deskripsi</h6>
                            <p class="text-secondary"
                                style="line-height: 1.8; font-size: 1rem; white-space: pre-line; text-align: justify;">
                                {{ $produk->deskripsi ?? 'Tidak ada deskripsi.' }}
                            </p>
                        </div>

                        <!-- Tombol -->
                        <!-- Tombol -->
                        <a href="{{ url('shop')}}" class="btn essence-btn">
                            ← Kembali ke Shop
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
