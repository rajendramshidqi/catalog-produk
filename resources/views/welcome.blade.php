@extends('layouts.frontend')
@section('content')
    <section class="welcome_area bg-img background-overlay"
        style="background-image: url('assets/frontend/img/bg-img/blog4.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="{{ url('shop') }}" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->

    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url('assets/frontend/img/bg-img/brd.png');">
                        <div class="catagory-content">
                            <a href="#">ADIDAS</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url('assets/frontend/img/bg-img/brd2.png');">
                        <div class="catagory-content">
                            <a href="#">NIKE</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url('assets/frontend/img/bg-img/brd3.png');">
                        <div class="catagory-content">
                            <a href="#">PUMA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        @foreach ($produk as $data)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    @if ($data->foto)
                                        <img src="{{ asset('storage/produk/' . $data->foto) }}" alt="foto"
                                            class="img-fluid">
                                    @else
                                        <div class="bg-light d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 150px;">
                                            Tidak ada gambar
                                        </div>
                                    @endif
                                    <!-- Hover Thumb -->
                                    <img class="hover-img">
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>{{ $data->merek->nama_merek }}</span>
                                    <a href="{{ route('details', $data->id) }}">
                                        <h6>{{ $data->jenis_produk }}</h6>
                                    </a>



                                    <p class="product-price">
                                        <td scope="row">{{ number_format($data->harga, 0, ',', '.') }}</td>
                                    </p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        
                                        <!-- Add to Cart -->

                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
