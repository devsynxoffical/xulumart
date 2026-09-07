@extends('layouts.laramart.master')

@section('title')
	{{ 'Order Complete' . ' | '. env('APP_NAME') }}
@endsection

@php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
@endphp

@section('style')
    <style type="text/css">
        .checkout input.form-control{
            border: 0.5px solid #000;
        }
    </style>
@endsection

@section('content')

        <!-- Start of Main -->
        <main class="main order">
        
            <div class="section section-padding"> 
                <div class="container">
                    
                    <p>Thank You For Your Order. Your Order ID is : {{$order->code }}</p>
                    
                    <h3 class="p-2 " style="text-align: right;" > <a href="{{ route('invoice.generate', $order->id) }}"> print </a> </h3>
                    
                    {{-- <button id="print">Print</button> --}}

                    <div id="printButton"> 
                        <table class="cart-wishlist-table table">
                            <thead>
                                <tr>
                                    
                                    <th style="width: 300px;padding: 10px;"><span>Product</span></th>
                                    <th style="width: 300px;padding: 10px;"><span>Quantity </span></th>
                                    <th style="width: 100px;padding: 10px;"><span>Price</span></th>
                                    {{-- <th style="padding: 10px;"><span>Quantity</span></th>
                                    <th style="width: 100px;padding: 10px;"><span>Subtotal</span></th>
                                    <th style="width: 100px;padding: 10px;"><span>Remove</span></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                            
                            
                                    @foreach($order->order_product as $product)
                                    <tr>
                                        <td>
                                            {{ optional($product->product)->title ?? 'Product no longer available' }}&nbsp;
                                        </td>
                                        <td>{{ $product->qty }} </td>
                                        <td>{{ env('CURRENCY') }}{{ $product->price }} {{ env('UAE_CURRENCY') }}</td>
                                    </tr>
                                    @endforeach
                            
                            </tbody>
                        </table>
                        <div class="cart-totals mt-5">
                            <h2 class="title">Cart totals</h2>
                            <table>
                                <tbody>
                                    <tr class="subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">{{ env('CURRENCY') }} {{ $order->price }} {{ env('UAE_CURRENCY') }}</span></td>
                                    </tr>
                                    
                                    <tr class="total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">{{ env('CURRENCY') }} {{ $order->price + $order->shipping_charge }} {{ env('UAE_CURRENCY') }}</span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <a href="{{ route('checkout') }}" class="btn btn-dark btn-outline-hover-dark">Proceed to checkout</a> --}}
                        </div>
                        </div>
                    </div>
            </div>
        </main>
        <!-- End of Main -->
	

@endsection