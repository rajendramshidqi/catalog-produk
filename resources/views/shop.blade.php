@extends('layouts.frontend')

@section('content')
    <div class="breadcumb_area bg-img" style="background-image: url('assets/frontend/img/bg-img/bg1.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

                            <!--  Catagories  -->

                        </div>

                        <!-- ##### Single Widget ##### -->


                        <!-- ##### Single Widget ##### -->


                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#">Asos</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">River Island</a></li>
                                    <li><a href="#">Topshop</a></li>
                                    <li><a href="#">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>186</span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Single Product -->

                            @foreach ($produk as $data)
                                <div class="col-12 col-sm-6 col-lg-4">

                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
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
                                            <!-- Product Badge -->

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
                                            <p class="product-price">{{ number_format($data->harga, 0, ',', '.') }}</p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn mb-2">

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            <!-- Single Product -->




                        </div>
                    </div>
                    <!-- Pagination -->
                   
                </div>
            </div>
        </div>
    </section>
@endsection
