@extends('layouts.laramart.master')

@section('content')
        <div class="section section-fluid section-padding pt-2" style="background: var(--brand-body-bg-1, #FAFAFA);">
            <div class="container">
                <div class="section-title2 text-center mb-4" data-aos="fade-up">
                    <h2 class="title title-icon-both">Flash Sale Products</h2>
                    <p>Limited-time deals — grab them before they're gone</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="prodyct-tab-content1 tab-content">
                            <div class="tab-pane fade show active" id="tab-new-sale">
                                <!-- Products Start -->
                                <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 ">
                                   
                                    @foreach($flash_products as $product)
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
            </div>
        </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $("input[type='radio']").change(function() {
            
            var category_id = $("input[name='category']:checked").val();
            var brand_id = $("input[name='brand']:checked").val();
            var min_price = $('#lower').val();
            var max_price = $('#upper').val();
            url = "{{ route('product.filter') }}";
            $.ajax({
                url: url,
                type: "POST",
                data:{
                    category_id:category_id,brand_id:brand_id,min_price: min_price,max_price: max_price,_token: '{{csrf_token()}}',
                },
                success:function(response){
                    console.log(response.product_filtered);
                    $('#product_filtered').html(response.product_filtered);
                }
            });
            
        });
    });
</script>
<script>
    var lowerSlider = document.querySelector('#lower');
    var  upperSlider = document.querySelector('#upper');

    document.querySelector('#two').value=upperSlider.value;
    document.querySelector('#one').value=lowerSlider.value;

    var  lowerVal = parseInt(lowerSlider.value);
    var upperVal = parseInt(upperSlider.value);

    upperSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        if (upperVal < lowerVal + 4) {
            lowerSlider.value = upperVal - 4;
            if (lowerVal == lowerSlider.min) {
            upperSlider.value = 4;
            }
        }
        document.querySelector('#two').value=this.value
    };

    lowerSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);
        if (lowerVal > upperVal - 4) {
            upperSlider.value = lowerVal + 4;
            if (upperVal == upperSlider.max) {
                lowerSlider.value = parseInt(upperSlider.max) - 4;
            }
        }
        document.querySelector('#one').value=this.value
    };

    function product_price_filter() {
        var category_id = $("input[name='category']:checked").val();
        var brand_id = $("input[name='brand']:checked").val();
        var min_price = $('#lower').val();
        var max_price = $('#upper').val();
        url = "{{ route('product.filter') }}";
        $.ajax({
            url: url,
            type: "POST",
            data:{
                category_id:category_id,brand_id:brand_id,min_price: min_price,max_price: max_price,_token: '{{csrf_token()}}',
            },
            success:function(response){
                //console.log(response.product_filtered);
                $('#product_filtered').html(response.product_filtered);
            }
        });
    }
</script>
@endsection

        