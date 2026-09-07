@extends('layouts.laramart.master')

@section('title') {{optional($category)->meta_title}} @endsection
@section('description'){{optional($category)->meta_description}} @endsection
@section('keywords'){{optional($category)->meta_keywords}}@endsection

@section('content')
{{-- 
<div class="main-content">
    <div class="row">

        <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 px-3">
            
            @foreach($products as $product)
                @include('partials.product')
            @endforeach
        </div>

        <div class="toolbox toolbox-pagination justify-content-between">
            <!-- <p class="showing-info mb-2 mb-sm-0">
                Showing<span>1-12 of 60</span>Products
            </p> -->
            <ul class="pagination">
                {{ $products->links('pagination::bootstrap-4') }}
            </ul>
        </div>

    </div>
</div> --}}

<div class="section section-fluid section-padding pt-2" style="background: var(--brand-body-bg-1, #FAFAFA);">
    <div class="container">
        <div class="section-title2 text-center mb-4" data-aos="fade-up">
            <h1 class="title title-icon-both" style="font-size:28px;font-weight:800;">{{ $category->title }}</h1>
            <p>{{ $products->total() }} product{{ $products->total() == 1 ? '' : 's' }} found</p>
        </div>
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
                                                <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="image">
                                                    <img class="rounded" src="{{ asset('images/product/'. $product->image) }}" alt="Product Image">
                                                    <img class="image-hover rounded border" src="{{ asset('images/product/'. $product->hover_image) }}" alt="Product Image">
                                                    {{-- <img class="image-hover rounded border" src="{{asset('frontend/images/product/01v.jpg')}}" alt="Product Image"> --}}
                                                </a>

                                                <!-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> -->
                                            </div> 
                                                <div class="product-info ">
                                                    <h3 class="title" style="font-size:14px;"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{$product->title}}</a></h3>
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

                        <div class="mt-4 d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

        