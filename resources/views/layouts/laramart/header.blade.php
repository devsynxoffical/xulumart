@php
    $wholesale_number = '';
    if (!empty($business) && is_object($business) && !empty($business->phone)) {
        $wholesale_number = preg_replace('/[^0-9]/', '', $business->phone);
    }
    $wholesale_link = !empty($wholesale_number)
        ? 'https://wa.me/' . $wholesale_number . '?text=' . urlencode('Hello, I am interested in Wholesale Order / Wholesale Price.')
        : '#';

    $primaryNav = $categories->take(5);
    $moreNav = $categories->slice(5);
@endphp

<style>
/* ========== Clean XuLu Mart header (overrides broken theme layout) ========== */
.xm-topbar{
    background:#05341A;
    color:#fff;
    font-size:13px;
    padding:8px 0;
}
.xm-topbar a{ color:#fff !important; text-decoration:none; }
.xm-topbar a:hover{ color:#FD6000 !important; }
.xm-topbar .xm-top-inner{
    display:flex; align-items:center; justify-content:space-between; gap:16px;
}

.xm-header-main{
    background:#05341A;
    padding:14px 0;
}
.xm-header-main .xm-row{
    display:flex;
    align-items:center;
    gap:16px;
}
.xm-header-main .xm-logo{
    display:inline-flex;
    align-items:center;
    gap:10px;
    text-decoration:none !important;
}
.xm-header-main .xm-logo-chip{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    width:42px;
    height:42px;
    background:#fff;
    border-radius:50%;
    padding:3px;
    box-shadow:0 2px 6px rgba(0,0,0,.15);
    overflow:hidden;
    flex-shrink:0;
}
.xm-header-main .xm-logo-chip img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:50%;
    display:block;
}
.xm-header-main .xm-logo-text{
    color:#fff;
    font-size:22px;
    font-weight:800;
    letter-spacing:.3px;
    font-family:'Plus Jakarta Sans',sans-serif;
    white-space:nowrap;
}
.xm-header-main .xm-search{
    flex:1;
    min-width:0;
}
.xm-header-main .xm-search form{
    display:flex;
    width:100%;
    border-radius:8px;
    overflow:hidden;
    background:#fff;
}
.xm-header-main .xm-search input{
    flex:1;
    border:none !important;
    outline:none;
    padding:12px 16px;
    font-size:14px;
    color:#1B1B1B !important;
    background:#fff !important;
    min-width:0;
    height:44px;
}
.xm-header-main .xm-search button{
    border:none;
    background:#FD6000;
    color:#fff;
    width:52px;
    flex-shrink:0;
    cursor:pointer;
}
.xm-header-main .xm-search button:hover{ background:#E05500; }

.xm-tools{
    display:flex;
    align-items:center;
    gap:8px;
    flex-shrink:0;
}
.xm-tool{
    display:inline-flex;
    align-items:center;
    gap:8px;
    color:#fff !important;
    text-decoration:none !important;
    padding:8px 10px;
    border-radius:8px;
    position:relative;
    white-space:nowrap;
    line-height:1.15;
}
.xm-tool:hover{ background:rgba(255,255,255,.08); color:#FD6000 !important; }
.xm-tool i{ font-size:18px; line-height:1; }
.xm-tool .xm-tool-text{ display:flex; flex-direction:column; font-size:11px; }
.xm-tool .xm-tool-text b{ font-size:13px; font-weight:700; }
.xm-tool .xm-badge{
    position:absolute;
    top:2px;
    left:22px;
    min-width:16px;
    height:16px;
    border-radius:50%;
    background:#FD6000;
    color:#fff;
    font-size:10px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
    line-height:1;
}
.xm-wholesale{
    display:inline-flex;
    align-items:center;
    gap:8px;
    background:#FD6000;
    color:#fff !important;
    font-weight:700;
    font-size:13px;
    padding:10px 14px;
    border-radius:8px;
    text-decoration:none !important;
    white-space:nowrap;
}
.xm-wholesale:hover{ background:#E05500; color:#fff !important; }

/* Nav bar - ONE row */
.xm-navbar{
    background:#0a4a28;
    border-top:1px solid rgba(255,255,255,.08);
    position:relative;
    z-index:1000;
}
.xm-navbar .xm-nav-inner{
    display:flex;
    align-items:center;
    gap:8px;
    min-height:52px;
}
.xm-nav-cats{ position:relative; flex-shrink:0; z-index:1050; }
.xm-nav-cats > button{
    background:#FD6000;
    color:#fff;
    border:none;
    font-weight:700;
    font-size:13px;
    padding:12px 16px;
    border-radius:6px;
    display:inline-flex;
    align-items:center;
    gap:8px;
    cursor:pointer;
    white-space:nowrap;
}
.xm-nav-cats > button:hover{ background:#E05500; }
.xm-cat-dropdown{
    display:none;
    position:absolute;
    left:0;
    top:100%;
    width:280px;
    background:#fff;
    border-radius:0 0 10px 10px;
    box-shadow:0 12px 32px rgba(0,0,0,.2);
    z-index:2000;
    padding:8px 0;
    overflow:visible !important;
}
.xm-nav-cats:hover > .xm-cat-dropdown,
.xm-nav-cats.open > .xm-cat-dropdown{ display:block !important; }
.xm-cat-item{ position:relative; }
.xm-cat-item > a{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:10px 16px;
    color:#1B1B1B !important;
    font-size:14px;
    font-weight:600;
    text-decoration:none !important;
}
.xm-cat-item > a:hover{ background:#FEF5EE; color:#FD6000 !important; }
.xm-cat-sub{
    display:none;
    position:absolute;
    left:100%;
    top:0;
    min-width:240px;
    background:#fff;
    box-shadow:0 10px 30px rgba(0,0,0,.18);
    border:1px solid #E5E7EB;
    border-radius:0 10px 10px 10px;
    z-index:2100;
    padding:8px 0;
}
.xm-cat-item:hover > .xm-cat-sub{ display:block !important; }
.xm-cat-sub a{
    display:block;
    padding:8px 16px;
    color:#374151 !important;
    font-size:13px;
    text-decoration:none !important;
    font-weight:600;
}
.xm-cat-sub a:hover{ background:#FEF5EE; color:#FD6000 !important; }

.xm-nav-links{
    display:flex !important;
    flex-direction:row !important;
    flex-wrap:nowrap !important;
    align-items:center;
    gap:2px;
    list-style:none;
    margin:0;
    padding:0;
    flex:1;
    min-width:0;
    overflow:visible !important;
}
.xm-nav-links > li{ position:relative; flex-shrink:0; }
.xm-nav-links > li > a{
    display:inline-flex;
    align-items:center;
    gap:5px;
    padding:14px 12px;
    color:#fff !important;
    font-size:13px;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:.3px;
    text-decoration:none !important;
    white-space:nowrap;
    border-radius:4px;
}
.xm-nav-links > li > a:hover{ color:#FD6000 !important; background:rgba(255,255,255,.06); }

.xm-drop{
    display:none;
    position:absolute;
    left:0;
    top:100%;
    min-width:220px;
    max-height:75vh;
    overflow-y:auto;
    background:#fff !important;
    border-radius:0 0 10px 10px;
    box-shadow:0 12px 28px rgba(0,0,0,.18);
    border:1px solid #E5E7EB;
    z-index:2100;
    padding:8px 0;
}
.xm-nav-links > li:hover > .xm-drop{ display:block !important; }
.xm-drop a{
    display:block;
    padding:9px 16px;
    color:#1B1B1B !important;
    font-size:13px;
    font-weight:600;
    text-decoration:none !important;
    text-transform:none;
    letter-spacing:0;
    background:#fff !important;
}
.xm-drop a:hover{ background:#FEF5EE !important; color:#FD6000 !important; }

.xm-nav-phone{
    margin-left:auto;
    flex-shrink:0;
    color:#fff !important;
    font-weight:700;
    font-size:13px;
    white-space:nowrap;
    padding-left:16px;
    border-left:1px solid rgba(255,255,255,.25);
}
.xm-nav-phone a{ color:#fff !important; text-decoration:none; }
.xm-nav-phone a:hover{ color:#FD6000 !important; }

/* Mobile header */
.xm-mobile-header{
    background:#05341A;
    padding:10px 0;
}
.xm-mobile-header .xm-m-row{
    display:flex;
    align-items:center;
    gap:10px;
}
.xm-mobile-header .xm-logo{
    display:inline-flex;
    align-items:center;
    gap:8px;
    text-decoration:none !important;
}
.xm-mobile-header .xm-logo-chip{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    width:34px;
    height:34px;
    background:#fff;
    border-radius:50%;
    padding:2px;
    overflow:hidden;
    flex-shrink:0;
}
.xm-mobile-header .xm-logo-chip img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:50%;
    display:block;
}
.xm-mobile-header .xm-logo-text{
    color:#fff;
    font-size:17px;
    font-weight:800;
    font-family:'Plus Jakarta Sans',sans-serif;
    white-space:nowrap;
}
.xm-mobile-header .xm-tools{ margin-left:auto; }
.xm-mobile-header .xm-tool{ padding:6px 8px; }
.xm-mobile-header .xm-tool i{ color:#fff; }
.xm-mobile-header .xm-menu-btn{
    background:transparent;
    border:none;
    color:#fff;
    font-size:22px;
    padding:6px 8px;
    cursor:pointer;
}
.xm-mobile-wholesale{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    margin-top:8px;
    background:#FD6000;
    color:#fff !important;
    font-weight:700;
    font-size:13px;
    padding:10px;
    border-radius:8px;
    text-decoration:none !important;
}

/* Kill conflicting theme header styles inside our blocks */
.xm-header-main .header-tools,
.xm-header-main .header-login,
.xm-header-main .header-wishlist,
.xm-header-main .header-cart{
    width:auto !important;
    height:auto !important;
    position:static !important;
}
.site-menu-section,
.header-section.section.d-none,
.sticky-header.header-menu-center{ /* replaced */ }

@media (max-width: 1199px){
    .xm-tool .xm-tool-text{ display:none; }
    .xm-wholesale span{ display:none; }
    .xm-wholesale{ padding:10px 12px; border-radius:50%; }
}
@media (max-width: 991px){
    .xm-nav-links > li.xm-hide-md{ display:none; }
}
</style>

{{-- TOP BAR --}}
<div class="xm-topbar d-none d-md-block">
    <div class="container">
        <div class="xm-top-inner">
            <a href="https://maps.app.goo.gl/KEXSeY7vFruQuXGJ6" target="_blank" rel="noopener">
                <i class="fa fa-map-marker-alt"></i> Store Location
            </a>
            <span>Handicrafts wholesale Provider in the world!</span>
            <div>
                @auth
                    <a href="{{ url('my-account') }}">My Account</a>
                @else
                    <a href="{{ route('login') }}">Sign in</a>
                    <span style="opacity:.5;margin:0 6px;">|</span>
                    <a href="{{ route('register') }}">Sign Up</a>
                @endauth
            </div>
        </div>
    </div>
</div>

{{-- DESKTOP HEADER --}}
<div class="xm-header-main d-none d-xl-block">
    <div class="container" style="max-width:1320px;">
        <div class="xm-row">
            <a href="{{ url('/') }}" class="xm-logo">
                <span class="xm-logo-chip">
                    <img src="{{ \App\Helpers\Media::url('website', optional($business)->logo) }}" alt="" onerror="this.style.display='none'">
                </span>
                <span class="xm-logo-text">{{ optional($business)->name ?? 'XuLu Mart' }}</span>
            </a>

            <div class="xm-search">
                <form method="get" action="{{ route('search.result') }}" autocomplete="off">
                    <input type="text" name="search" placeholder="Search Products...">
                    <button type="submit" aria-label="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="xm-tools">
                <a class="xm-tool" href="{{ Auth::check() ? url('my-account') : route('login') }}">
                    <i class="far fa-user"></i>
                    <span class="xm-tool-text">
                        <span>{{ Auth::check() ? 'Hello' : 'Sign in' }}</span>
                        <b>Account</b>
                    </span>
                </a>
                <a class="xm-tool offcanvas-toggle" href="#offcanvas-wishlist">
                    <span class="xm-badge" id="wish_list_count">0</span>
                    <i class="far fa-heart"></i>
                </a>
                <a class="xm-tool offcanvas-toggle" href="#offcanvas-cart">
                    <span class="xm-badge cart-count">{{ Cart::count() }}</span>
                    <i class="fas fa-shopping-cart"></i>
                    <span class="xm-tool-text"><b>Cart</b></span>
                </a>
                <a class="xm-wholesale" href="{{ $wholesale_link }}" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i>
                    <span>Wholesale Order</span>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- DESKTOP NAV --}}
<div class="xm-navbar d-none d-xl-block">
    <div class="container" style="max-width:1320px;">
        <div class="xm-nav-inner">
            <div class="xm-nav-cats">
                <button type="button"><i class="fas fa-bars"></i> All Categories</button>
                <div class="xm-cat-dropdown">
                    @foreach($categories as $category)
                        <div class="xm-cat-item">
                            <a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">
                                {{ $category->title }}
                                @if($category->child->count()) <i class="fa fa-angle-right"></i> @endif
                            </a>
                            @if($category->child->count())
                                <div class="xm-cat-sub">
                                    @foreach($category->child as $sub)
                                        <a href="{{ route('category.products', [$sub->id, Str::slug($sub->title)]) }}">{{ $sub->title }}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <ul class="xm-nav-links">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Shop</a></li>
                <li><a href="{{ route('flashSale') }}">Flash Sale</a></li>

                @foreach($primaryNav as $category)
                    <li>
                        <a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">
                            {{ $category->title }}
                            @if($category->child->count()) <i class="fa fa-angle-down"></i> @endif
                        </a>
                        @if($category->child->count())
                            <div class="xm-drop">
                                @foreach($category->child as $sub)
                                    <a href="{{ route('category.products', [$sub->id, Str::slug($sub->title)]) }}">{{ $sub->title }}</a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach

                <li>
                    <a href="#">More <i class="fa fa-angle-down"></i></a>
                    <div class="xm-drop">
                        @foreach($moreNav as $category)
                            <a href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">{{ $category->title }}</a>
                        @endforeach
                        <a href="{{ route('about') }}">About Us</a>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </li>
            </ul>

            @if(!empty($business->phone))
                <div class="xm-nav-phone">
                    <a href="tel:{{ $business->phone }}"><i class="fa fa-phone"></i> {{ $business->phone }}</a>
                </div>
            @endif
        </div>
    </div>
</div>

{{-- MOBILE HEADER --}}
<div class="xm-mobile-header d-xl-none">
    <div class="container-fluid px-3">
        <div class="xm-m-row">
            <a href="#offcanvas-mobile-menu" class="xm-menu-btn offcanvas-toggle" aria-label="Menu">
                <i class="fas fa-bars"></i>
            </a>
            <a href="{{ url('/') }}" class="xm-logo">
                <span class="xm-logo-chip">
                    <img src="{{ \App\Helpers\Media::url('website', optional($business)->logo) }}" alt="" onerror="this.style.display='none'">
                </span>
                <span class="xm-logo-text">{{ optional($business)->name ?? 'XuLu Mart' }}</span>
            </a>
            <div class="xm-tools">
                <a class="xm-tool offcanvas-toggle" href="#offcanvas-search"><i class="fas fa-search"></i></a>
                <a class="xm-tool offcanvas-toggle" href="#offcanvas-cart">
                    <span class="xm-badge cart-count">{{ Cart::count() }}</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
        <a href="{{ $wholesale_link }}" target="_blank" rel="noopener" class="xm-mobile-wholesale">
            <i class="fab fa-whatsapp"></i> Wholesale Order / Wholesale Price
        </a>
    </div>
</div>
