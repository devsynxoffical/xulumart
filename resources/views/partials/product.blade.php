@if(!empty($product))
@php( $settings = DB::table('settings')->first('phone') )
    <div class="product-wrap product text-center p-1" style="">
        <div class="shadow" style="border: 1px solid #F7B466; border-radius: 10px;">
        <figure class="product-media p-1">
            <a class="product-img" href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">
                <img class="shadow" style="border-radius: 10px;" src="{{ asset('images/product/'. $product->image) }}" alt="{{ $product->title }}"
                    width="216" height="243" />
            </a>
            <div class="product-action-vertical">
                
                <a onclick="addToWishlist({{ $product->id }})" class="btn-product-icon w-icon-heart peoduct_cart"
                    title="Add to wishlist"></a>
                <!-- <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a> -->
                <!-- <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                    title="Add to Compare"></a> -->
            </div>
        </figure>
        <div class="product-details">
            <h5 class="mb-1"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}">{{ $product->title }}</a></h5>
            {{--
            <p style="font-size: 20px;">{{ $product->weight }} {{ $product->unit }}</p>
            
            <!-- <div class="ratings-container">
                <div class="ratings-full">
                    <span class="ratings" style="width: 100%;"></span>
                    <span class="tooltiptext tooltip-top"></span>
                </div>
                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
            </div> -->
            <div class="product-price">
            	@if($product->type == 'single')
                    @if($product->is_sale == 1)
                        <ins class="new-price">{{ env('CURRENCY') }} {{ $product->discount_price }} {{ env('UAE_CURRENCY') }}</ins><del class="old-price">{{ env('CURRENCY') }} {{ $product->price }} {{ env('UAE_CURRENCY') }}</del>
                    @else
                        <ins class="new-price">{{ env('CURRENCY') }} {{ $product->price }} {{ env('UAE_CURRENCY') }}</ins><!-- <del class="old-price">$25.68</del> -->
                    @endif
                
                @else

                	@if(count($product->variation) == 1)
                		<ins class="new-price">{{ env('CURRENCY') }} {{ $product->variation->first()->price }} {{ env('UAE_CURRENCY') }}</ins>
                	@else
                		<ins class="new-price">{{ env('CURRENCY') }} {{ $product->variation->where('price', $product->variation->min('price'))->first()->price }} {{ env('UAE_CURRENCY') }} - {{ env('CURRENCY') }} {{ $product->variation->where('price', $product->variation->max('price'))->first()->price }} {{ env('UAE_CURRENCY') }}</ins>
                	@endif

                @endif
            </div>
            --}}
            <div class="d-flex my-3 justify-content-center">
                <a onclick="addToCart({{ $product->id }})" class="btn-product-icon w-icon-cart peoduct_cart" title="Add to cart"></a>
                {{-- <a href="tel:{{optional($settings)->phone}}" class="btn btn-primary p-3 mx-2" style="background-color: #F59C34 !important; border: none; border-radius: 30px; color: #FFFFFF !important;">Call Now</a> --}}
                <a onclick="addToCart({{ $product->id }})" class="btn btn-primary p-3 mx-2" style="border-radius: 30px; color: #FFFFFF !important;">Add To Cart</a>
            </div>
        </div>
        </div>
    </div>


@endif