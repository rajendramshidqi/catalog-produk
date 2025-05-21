<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

        <!-- ======= NAVIGATION ======= -->
        <nav class="classy-navbar" id="essenceNav">

            <!-- Logo -->
            <a class="nav-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/frontend/img/core-img/logo.png') }}" alt="Logo">
            </a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler">
                    <span></span><span></span><span></span>
                </span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">
                
                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap">
                        <span class="top"></span>
                        <span class="bottom"></span>
                    </div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        
                      
                        
                    </ul>
                </div>
                <!-- Nav End -->

            </div>
        </nav>

        <!-- ======= HEADER META DATA ======= -->
        <div class="header-meta d-flex clearfix justify-content-end">

            <!-- Search Area -->
            <div class="search-area">
                <form action="{{ route('search') }}" method="GET">
                    <input type="search" name="keyword" id="headerSearch" placeholder="Cari produk...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#">
                    <img src="{{ asset('assets/frontend/img/core-img/heart.svg') }}" alt="Favorite">
                </a>
            </div>

            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#">
                    <img src="{{ asset('assets/frontend/img/core-img/user.svg') }}" alt="Login">
                </a>
            </div>

            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn">
                    <img src="{{ asset('assets/frontend/img/core-img/bag.svg') }}" alt="Cart">
                    <span>3</span>
                </a>
            </div>

        </div>
    </div>
</header>
