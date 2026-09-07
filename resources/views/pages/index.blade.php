@extends('layouts.laramart.master')

@section('title', 'XuLu Mart | Online Shopping')
@section('meta_description', 'Shop quality products online at XuLu Mart. Fast delivery, great prices, and a wide range of categories.')

@section('content')
@php
    $heroSlide = $sliders->first();
    $dealCountdown = $dealOfDay && $dealOfDay->deal_of_day_count
        ? \Carbon\Carbon::parse($dealOfDay->deal_of_day_count)->format('Y/m/d H:i:s')
        : \Carbon\Carbon::now()->addDays(1)->format('Y/m/d H:i:s');
@endphp

{{-- HERO --}}
<section class="xm-hero">
    <div class="container" style="max-width:1280px;">
        <div class="xm-hero-inner">
            <div>
                <div class="xm-hero-eyebrow">Limited time only</div>
                <h1>Shop More, <span>Save More!</span></h1>
                <p class="xm-hero-sub">Discover amazing deals on your favorite products — quality handicrafts, fashion, home & more.</p>
                <div class="xm-hero-trust">
                    <span><i class="fas fa-tag"></i> Best Prices Guaranteed</span>
                    <span><i class="fas fa-lock"></i> Secure Payments</span>
                    <span><i class="fas fa-shipping-fast"></i> Fast Delivery</span>
                </div>
                <a href="{{ route('products') }}" class="xm-hero-cta">Explore Collection <i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="xm-hero-media">
                @if($heroSlide)
                    <a href="{{ $heroSlide->link ?: route('products') }}">
                        <img src="{{ asset('images/slider/' . $heroSlide->image) }}" alt="XuLu Mart deals">
                    </a>
                @else
                    <img src="{{ asset('frontend/images/animation-banner-update.png') }}" alt="XuLu Mart">
                @endif
            </div>
        </div>
    </div>
    <div class="xm-hero-badge">UP TO<br>50% OFF</div>
</section>

{{-- VALUE BAR --}}
<div class="xm-value-bar">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3"><i class="fas fa-truck"></i> Free Shipping</div>
            <div class="col-6 col-md-3"><i class="fas fa-undo"></i> Easy Returns</div>
            <div class="col-6 col-md-3"><i class="fas fa-award"></i> Premium Quality</div>
            <div class="col-6 col-md-3"><i class="fas fa-headset"></i> 24/7 Support</div>
        </div>
    </div>
</div>

{{-- Extra slider strip (desktop) --}}
@if($sliders->count() > 1)
<div class="section my-3 desktop-show">
    <div class="container">
        <div id="demoDesktop" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ $slider->link ?: '#' }}">
                            <img src="{{ asset('images/slider/' . $slider->image) }}" alt="Promotion" class="d-block w-100" style="max-height:320px;object-fit:cover;border-radius:12px;">
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demoDesktop" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demoDesktop" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
@endif

{{-- SHOP BY CATEGORY --}}
<section class="xm-section">
    <div class="container">
        <div class="xm-section-head justify-content-center text-center" style="display:block;">
            <h2>Shop By Category</h2>
            <p class="text-muted mb-0">Find exactly what you're looking for</p>
        </div>
        <div class="xm-cat-grid mt-4">
            @foreach($featured_categories as $category)
                <a class="xm-cat-card" href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">
                    <img src="{{ \App\Helpers\Media::url('category', $category->image, 'frontend/images/animation-banner-update.png') }}" alt="{{ $category->title }}">
                    <div class="body">
                        <h3>{{ $category->title }}</h3>
                        <span class="shop-link">Shop Now →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- DEAL OF THE DAY --}}
<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="xm-deal">
            <div>
                <div class="xm-deal-label">Deal of the Day</div>
                <h2>Grab It Before It's Gone!</h2>
                <p class="text-muted">Hurry! Limited stock available on today's featured offer.</p>
                @if($dealOfDay)
                    <a href="{{ route('single.product', [$dealOfDay->id, Str::slug($dealOfDay->title)]) }}" class="xm-hero-cta mt-2 d-inline-flex">Shop the Deal →</a>
                @else
                    <a href="{{ route('offer.products') }}" class="xm-hero-cta mt-2 d-inline-flex">Shop Offers →</a>
                @endif
            </div>
            <div>
                @if($dealOfDay)
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-3 mb-md-0">
                            <img src="{{ asset('images/product/' . $dealOfDay->image) }}" alt="{{ $dealOfDay->title }}" style="max-height:220px;object-fit:contain;">
                        </div>
                        <div class="col-md-7">
                            <h3 style="font-size:20px;margin-bottom:6px;">{{ $dealOfDay->title }}</h3>
                            <div class="xm-deal-price">
                                @if($dealOfDay->is_sale && $dealOfDay->discount_price > 0)
                                    ৳{{ $dealOfDay->discount_price }}
                                    <span class="old">৳{{ $dealOfDay->price }}</span>
                                @else
                                    ৳{{ $dealOfDay->price }}
                                @endif
                            </div>
                            @if(!is_null($dealOfDay->qty))
                                <p class="mt-2 mb-1" style="font-size:13px;color:#05341A;font-weight:600;">Only {{ $dealOfDay->qty }} items left!</p>
                                <div style="height:6px;background:#E8E0D8;border-radius:4px;overflow:hidden;">
                                    <div style="height:100%;width:{{ min(100, max(10, (int)$dealOfDay->qty)) }}%;background:#FD6000;"></div>
                                </div>
                            @endif
                            <div class="xm-countdown countdown1" data-countdown="{{ $dealCountdown }}">
                                <div class="box count"><strong class="amount">00</strong><span class="period">Hrs</span></div>
                                <div class="box count"><strong class="amount">00</strong><span class="period">Mins</span></div>
                                <div class="box count"><strong class="amount">00</strong><span class="period">Secs</span></div>
                            </div>
                        </div>
                    </div>
                @else
                    <img src="{{ asset('frontend/images/animation-banner-update.png') }}" alt="Deal" style="width:100%;border-radius:12px;">
                @endif
            </div>
        </div>
    </div>
</section>

{{-- NEW ARRIVALS --}}
<section class="xm-section">
    <div class="container">
        <div class="xm-section-head">
            <h2>New Arrivals</h2>
            <a href="{{ route('products') }}">View All →</a>
        </div>
        <div class="xm-product-grid">
            @foreach($newArrivalProducts->take(8) as $product)
                <div class="xm-product-card">
                    <span class="badge-new">NEW</span>
                    <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="thumb">
                        <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->title }}">
                    </a>
                    <div class="info">
                        <h3><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{ $product->title }}</a></h3>
                        <div class="price">
                            @if($product->is_sale == 1 && $product->discount_price > 0)
                                ৳{{ $product->discount_price }}
                            @else
                                ৳{{ $product->price }}
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FLASH SALE --}}
@if($flashSales->count() > 0)
<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="xm-section-head">
            <h2>Flash Sale</h2>
            <a href="{{ route('flashSale') }}">View All →</a>
        </div>
        <div class="products row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
            @foreach($flashSales as $product)
                <div class="col">
                    <div class="border rounded bg-white m-1">
                        <div class="product mb-1">
                            <div class="product-thumb">
                                <span class="product-badges"><span class="hot">Flash</span></span>
                                <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="image">
                                    <img class="rounded" src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->title }}">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="title" style="font-size:14px;"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{ $product->title }}</a></h3>
                                <span class="price">
                                    @if($product->is_sale == 1 && $product->discount_price > 0)
                                        <span class="old">৳{{ $product->price }}</span>
                                        <span class="new">৳{{ $product->discount_price }}</span>
                                    @else
                                        <span class="new">৳{{ $product->price }}</span>
                                    @endif
                                </span>
                                <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="btn-order-now">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- TOP SELLERS --}}
@if($top_sales->count() > 0)
<section class="xm-section">
    <div class="container">
        <div class="xm-section-head">
            <h2>Top Sellers</h2>
            <a href="{{ route('products') }}">Discover more →</a>
        </div>
        <div class="xm-product-grid">
            @foreach($top_sales->take(4) as $product)
                <div class="xm-product-card">
                    <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="thumb">
                        <img src="{{ asset('images/product/' . $product->image) }}" alt="{{ $product->title }}">
                    </a>
                    <div class="info">
                        <h3><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{ $product->title }}</a></h3>
                        <div class="price">৳{{ ($product->is_sale && $product->discount_price > 0) ? $product->discount_price : $product->price }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ABOUT --}}
<section class="xm-section xm-section-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2>{{ $home_about->title ?? 'About XuLu Mart' }}</h2>
                <div class="text-muted">{!! $home_about->description ?? 'Quality products with trusted delivery across Bangladesh.' !!}</div>
            </div>
            <div class="col-md-6">
                @if(!empty($home_about->youtube_link))
                    <div class="ratio ratio-16x9" style="border-radius:12px;overflow:hidden;">
                        <iframe src="{{ $home_about->youtube_link }}" title="About XuLu Mart" allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
@if(isset($faqs) && $faqs->count())
<section class="xm-section">
    <div class="container">
        <div class="text-center mb-4">
            <h2>FAQ</h2>
            <p class="text-muted">Frequently asked questions</p>
        </div>
        <div class="accordion" id="homeFaq">
            @foreach($faqs as $index => $faq)
                <div class="accordion-item" style="border:1px solid #E8E0D8;border-radius:8px;margin-bottom:8px;overflow:hidden;">
                    <h3 class="accordion-header" id="faq-h-{{ $index }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-c-{{ $index }}">
                            {{ $faq->title }}
                        </button>
                    </h3>
                    <div id="faq-c-{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#homeFaq">
                        <div class="accordion-body">{!! $faq->body !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
