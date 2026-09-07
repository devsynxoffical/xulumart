<!-- Topbar Section Start -->
<div class="topbar-section section border-bottom" style="background: #6A9113; 
background: -webkit-linear-gradient(to right, #141517, #6A9113); 
background: linear-gradient(to right, #141517, #6A9113); 
border-bottom: 2px solid #BDCDC2 !important;">
<div class="container">
    <div class="row align-items-center">
        <div class="col d-none d-md-block">
            <div class="topbar-menu text-light">
                <ul>
                    <li><a href="#"><i class="fa fa-map-marker-alt"></i>Store Location</a></li>
                    <li><a href="{{ route('customer.orders') }}><i class="fa fa-truck"></i>Order Tracking</a></li>
                </ul>
            </div>
        </div>
        <div class="col d-md-none d-lg-block text-light">
            <p class="text-center my-2">Handicrafts wholesale Provider in the world!</p>
        </div>

        <!-- Header Language & Currency Start -->
        <div class="col d-none d-md-block">
            <ul class="header-lan-curr text-white justify-content-end">
                <li><a href="{{route('login')}}" class="text-light">Sign in</a></li>
                <li><a href="{{route('register')}}" class="text-light">Sign Up</a></li>
            </ul>
        </div>
        <!-- Header Language & Currency End -->
        
    </div>
</div>
</div>
<!-- Topbar Section End -->

<!-- Header Section Start -->
<div class="header-section section d-none d-xl-block">
<div class="container">
    <div class="row justify-content-between align-items-center">

        <!-- Header Logo Start -->
    
        <div class="col-auto">
            <div class="header-logo justify-content-center" style="max-width:80%">
                <a href="#"><img width="220" src="{{ asset('images/website/'. $business->logo) }}" alt="Lara Mart"></a>
            </div>
        </div>
        <!-- Header Logo End -->

        <!-- Header Search Start -->
        <div class="col">
            <div class="header6-search">
                <form method="get" action="{{ route('search.result') }}"  autocomplete="off">
                    @php
                        $categories = App\Models\Category::all();
                    @endphp
                    <div class="row g-0">
                        {{-- <div class="col-auto">
                            <select class="search-select select2-basic">
                            
                                <option value="0">All Categories</option>
                                @php
                                    $categories = App\Models\Category::all();
                                @endphp
                                @foreach ($categories as $category)
                                option value="{{optional($category)->title}}">{{optional($category)->title}}</option>
                                    
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="col">
                            <input type="text"  name="search" id="search" placeholder="Search Products...">
                        </div>
                        
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                {{-- <form method="get" action="{{ route('search.result') }}" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper" style="border-left: 2px solid #336699;" autocomplete="off">
                    @csrf
                    
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search in..." required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form> --}}
            </div>
        </div>
        <!-- Header Search End -->

        <!-- Header Tools Start -->
        <div class="col-auto">
            <div class="header-tools justify-content-end">
                <!-- <div class="header-login">
                    <a href="my-account.html"><i class="far fa-user"></i></a>
                </div> -->
                {{-- <div class="header-wishlist">
                    <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                </div> --}}
                <div class="header-cart">
                    <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">{{ Cart::count() }}</span><i class="fas fa-shopping-cart"></i></a>
                </div> 
            </div>
        </div>
        <!-- Header Tools End -->

    </div>
</div>

<!-- Site Menu Section Start -->
<div class="site-menu-section section border-top" style="background: #6A9113;
    background: -webkit-linear-gradient(to right, #141517, #6A9113); 
    background: linear-gradient(to left, #141517, #6A9113); 
    ">
    <div class="container">
        <div class="header-categories">
            <button class="category-toggle"><i class="fas fa-bars"></i> Browse Categories</button>
            <ul class="header-category-list">
                <?php
                    foreach($categories as $category) {
                ?>
                    <li> <a style="padding: 5px 0 !important;" href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}"><img width="50px" class="rounded" src="{{ asset('images/category/'. $category->image) }}" alt=""> <?php echo $category['title']; ?></a></li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <nav class="site-main-menu justify-content-left menu-height-60 text-light">
            <ul>
                <li><a href="{{route('index')}}"><span class="menu-text text-light">Home</span></a></li>
                <li class="has-children"><a href="#"><span class="menu-text text-light">Categories</span></a>
                    <ul class="sub-menu">
                        <?php
                            foreach($categories as $category) {
                        ?>
                            <li><a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}"><span class="menu-text"><?php echo $category['title']; ?></span></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="{{route('products')}}"><span class="menu-text text-light">Shop</span></a></li>
                <li><a href="{{route('flashSale')}}"><span class="menu-text text-light">Flash Sale</span></a></li>
                <li class="has-children"><a href="#"><span class="menu-text text-light">Others</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{route('about')}}"><span class="menu-text">About us</span></a></li>
                        <li><a href="{{ route('contact') }}"><span class="menu-text">Contact Us</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="header-call text-light">
            <p><a href="tel:{{ $business->phone }}"><i class="fa fa-phone"></i> {{ $business->phone }}</a></p>
        </div>
    </div>
</div>
<!-- Site Menu Section End -->

</div>
<!-- Header Section End -->

<!-- Header Sticky Section Start -->
<div class="sticky-header header-menu-center section bg-white d-none d-xl-block home4_primary">
<div class="container"> 
    <div class="row align-items-center">

        <!-- Header Logo Start -->
        <div class="col">
            <div class="header-logo">
                
                <a href="home3.php"><img src="{{ asset('images/website/'. $business->footer_logo) }}" alt="Laramart"></a>
                {{-- <a href="home3.php"><img src="{{ asset('images/website/'. $setting->logo) }}" alt="Laramart"></a> --}}
            </div>
        </div>
        <!-- Header Logo End -->

        <!-- Search Start -->
        <div class="col d-none d-xl-block">
            <nav class="site-main-menu justify-content-center">
                <ul>
                    <li><a href="{{route('index')}}"><span class="menu-text"style="color:#ffffff !important">Home</span></a></li>
                    <li class="has-children"><a href="#"><span class="menu-text"style="color:#ffffff !important">Categories</span></a>
                        <ul class="sub-menu">
                            <?php
                                foreach($categories as $category) {
                            ?>
                                <li><a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}"><span class="menu-text"><?php echo $category['title']; ?></span></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li><a href="{{route('products')}}"><span class="menu-text"style="color:#ffffff !important">Shop</span></a></li>
                    <li><a href="{{route('flashSale')}}"><span class="menu-text"style="color:#ffffff !important">Flash Sale</span></a></li>
                    <li class="has-children"><a href="#"><span class="menu-text"style="color:#ffffff !important">Others</span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('about')}}"><span class="menu-text">About us</span></a></li>
                            <li><a href="{{ route('contact') }}"><span class="menu-text">Contact Us</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Search End -->

        <!-- Header Tools Start -->
        <div class="col-auto">
            <div class="header-tools justify-content-end">
                <div class="header-login">
                    <a href="my-account.html"><i class="far fa-user"style="color:#ffffff !important"></i></a>
                </div>
                <div class="header-search d-none d-sm-block">
                    <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"style="color:#ffffff !important"></i></a>
                </div>
                {{-- <div class="header-wishlist">
                    <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"style="color:#ffffff !important"></i></a>
                </div> --}}
                <div class="header-cart">
                    <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">{{ Cart::count() }}</span><i class="fas fa-shopping-cart" style="color:#ffffff !important"></i></a>
                </div> 
                <div class="mobile-menu-toggle d-xl-none">
                    <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                            <path d="M300,320 L540,320" class="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header Tools End -->

    </div>
</div>

</div>
<!-- Header Sticky Section End -->

<!-- Mobile Header Section Start -->
<div class="mobile-header bg-white section d-xl-none">
<div class="container-fluid">
    <div class="row align-items-center">

        <!-- Header Logo Start -->
        <div class="col">
            <div class="header-logo" style="max-width:80%">
                <a href="index.php"><img src="{{ asset('images/website/'.$business->logo) }}" alt="Learts Logo"></a>
            </div>
        </div>
        <!-- Header Logo End -->

        <!-- Header Tools Start -->
        <div class="col-auto">
            <div class="header-tools justify-content-end">
                <div class="header-login d-none d-sm-block">
                    <a href="my-account.html"><i class="far fa-user"></i></a>
                </div>
                <div class="header-search d-none d-sm-block">
                    <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                </div>
                


                {{-- <div class="header-wishlist d-none d-sm-block">
                    <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                </div> --}}
                
                <div class="header-cart">
                    <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                </div>


                <div class="mobile-menu-toggle">
                    <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                            <path d="M300,320 L540,320" class="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header Tools End -->
        <div class="scrollable-menu">
            <div class="custom-menu-item active"><a href="{{route('index')}}">Home</a></div>
            <div class="custom-menu-item"><a href="{{route('products')}}">Shop</a></div>
            <?php
                foreach($categories as $category) {
            ?>
                <!--<div class="custom-menu-item"><a href="#"><?php echo $category['title']; ?></a></div>-->
            <?php
                }
            ?>
            
            <div class="custom-menu-item"><a href="{{route('about')}}">About Us</a></div>
            <div class="custom-menu-item"><a href="{{ route('contact') }}">Contact Us</a></div>
        </div>
    </div>
</div>
</div>
<!-- Mobile Header Section End -->

<!-- Mobile Header Section Start -->
<div class="mobile-header sticky-header bg-white section d-xl-none">

<div class="container-fluid">
    <div class="row align-items-center">
        <!-- Header Logo Start -->
        <div class="col">
            <div class="header-logo" style="max-width:80%">
                <a href="index.php"><img src="{{ asset('images/website/'.$business->logo) }}" alt="Learts Logo"></a>
            </div>
        </div>
        <!-- Header Logo End -->

        <!-- Header Tools Start -->
        <div class="col-auto">
            <div class="header-tools justify-content-end">
                <div class="header-login d-none d-sm-block">
                    <a href="my-account.html"><i class="far fa-user"></i></a>
                </div>
                <div class="header-search d-none d-sm-block">
                    <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                </div>
                <div class="header-wishlist d-none d-sm-block">
                    <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                </div>
                <div class="header-cart">
                    <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                </div>
                
                <div class="mobile-menu-toggle">
                    <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                            <path d="M300,320 L540,320" class="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Header Tools End -->
        <div class="scrollable-menu">
            <div class="custom-menu-item active"><a href="{{route('index')}}">Home</a></div>
            <div class="custom-menu-item"><a href="{{route('products')}}">Shop</a></div>
            <?php
                foreach($categories as $category) {
            ?>
                <!--<div class="custom-menu-item"><a href="#"><?php echo $category['title']; ?></a></div>-->
            <?php
                }
            ?>
            
            <div class="custom-menu-item"><a href="{{route('about')}}">About Us</a></div>
            <div class="custom-menu-item"><a href="{{ route('contact') }}">Contact Us</a></div>
        </div>
    </div>
</div>
</div>
<!-- Mobile Header Section End -->
