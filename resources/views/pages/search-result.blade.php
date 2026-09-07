@extends('layouts.laramart.master')

@section('title')
	{{ ('Search List') . ' | '. env('APP_NAME') }}
@endsection

@section('content')

	<!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ route('products') }}">Home</a></li>
                        <li>Search Result</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
                
                <div class="container mb-5 ">
                    <!-- Start of Shop Content -->

                    {{-- <h3 >Search result </h3> --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="prodyct-tab-content1 tab-content">
                                <div class="tab-pane fade show active" id="tab-new-sale">
                                    <!-- Products Start -->
                                    <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
                                       
                                        @foreach($products as $product)
                                            <div class="col col-6" style="padding: 2px 0px;">
                                                <div class="border rounded bg-white m-1">
                                                    <div class="product mb-1">
                                                        <div class="scroll">
                                                            <div class="product-thumb">
                                                            <span class="product-badges">
                                                            @if($product->tags != NULL)
                                                                        <span class="hot">{{$product->tags}}</span>
                                                                        {{-- <span class="onsale">New</span> --}}
                                                                
                                                                @endif                            
                                                                
                                                            </span>
                                                            <a href="#" class="image">
                                                                <img class="rounded" src="{{ asset('images/product/'. $product->image) }}" alt="Product Image">
                                                                <img class="image-hover rounded border" src="{{ asset('images/product/'. $product->hover_image) }}" alt="Product Image">
                                                                {{-- <img class="image-hover rounded border" src="{{asset('frontend/images/product/01v.jpg')}}" alt="Product Image"> --}}
                                                            </a>
            
                                                            <!-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> -->
                                                        </div> 
                                                            <div class="product-info ">
                                                                <h6 class="title"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{$product->title}}</a></h6>
                                                                <span class="price">
                                                                        @if($product->is_sale == 1 )
                                                                            <span class="old">{{optional($product)->price}}</span>
                                                                            <span class="new">{{optional($product)->discount_price}}</span>
                                                                        @else
                                                                            <span class="new">{{optional($product)->price}}</span>
                                                                        @endif
                                                                </span>
                                                                
                                                                <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="btn btn-order-now">
                                                                    Order Now
                                                                </a>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Products End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

@endsection

        