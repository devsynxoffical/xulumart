<!-- resources/views/pages/cart.blade.php -->
@extends('layouts.laramart.master')

@section('title')
	{{ 'Shopping Cart' . ' | '. env('APP_NAME') }}
@endsection

@php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
@endphp

@section('style')
    <style type="text/css">
        .cart-page-wrap{ background: var(--brand-body-bg-1, #FAFAFA); }
        .cart-item-card{
            background: #fff;
            border: 1px solid var(--brand-border, #ECECEC);
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 14px;
            display: grid;
            grid-template-columns: 90px 1fr auto;
            gap: 16px;
            align-items: center;
            transition: box-shadow .2s ease;
        }
        .cart-item-card:hover{ box-shadow: 0 8px 20px rgba(0,0,0,.06); }
        .cart-item-card img{
            width: 90px; height: 90px; object-fit: cover;
            border-radius: 10px; border: 1px solid var(--brand-border, #ECECEC);
        }
        .cart-item-name{ font-weight: 700; font-size: 15px; color: #1B1B1B; display: block; margin-bottom: 6px; }
        .cart-item-price{ color: var(--brand-secondary, #FD6000); font-weight: 700; font-size: 15px; }
        .cart-qty-form{ display: flex; align-items: center; gap: 8px; margin-top: 10px; }
        .cart-qty-form input[type=number]{ width: 70px; border: 1px solid var(--brand-border, #ECECEC); border-radius: 8px; padding: 6px 8px; text-align: center; }
        .cart-qty-form .btn-update{ background: #1B1B1B; color: #fff; border: none; border-radius: 8px; padding: 6px 14px; font-size: 13px; font-weight: 600; }
        .cart-qty-form .btn-update:hover{ background: var(--brand-secondary, #FD6000); }
        .cart-item-side{ text-align: right; display: flex; flex-direction: column; align-items: flex-end; gap: 8px; }
        .cart-item-subtotal{ font-weight: 800; font-size: 16px; }
        .cart-remove-btn{
            background: #fff; border: 1px solid var(--brand-border, #ECECEC); color: #C0392B;
            width: 32px; height: 32px; border-radius: 50%; font-size: 15px; line-height: 1;
            display: flex; align-items: center; justify-content: center;
            transition: background .2s ease, color .2s ease, transform .2s ease;
        }
        .cart-remove-btn:hover{ background: #C0392B; color: #fff; transform: scale(1.08); }
        .cart-summary-card{ background: #fff; border: 1px solid var(--brand-border, #ECECEC); border-radius: 14px; padding: 26px; position: sticky; top: 90px; }
        .cart-summary-card h2.title{ font-size: 19px; font-weight: 800; margin-bottom: 16px; }
        .cart-summary-row{ display: flex; justify-content: space-between; padding: 10px 0; font-size: 14.5px; border-bottom: 1px solid var(--brand-border, #ECECEC); }
        .cart-summary-row.total{ font-size: 18px; font-weight: 800; border-bottom: none; padding-top: 16px; }
        .cart-summary-row.total .amount{ color: var(--brand-secondary, #FD6000); }
        .btn-checkout{
            display: block; width: 100%; text-align: center; background: var(--brand-secondary, #FD6000);
            color: #fff; font-weight: 700; padding: 14px; border-radius: 30px; margin-top: 18px;
            transition: background .2s ease, transform .2s ease;
        }
        .btn-checkout:hover{ background: var(--brand-secondary-hover, #E05500); color: #fff; transform: translateY(-2px); }
        .btn-continue{ display: inline-block; border: 1px solid var(--brand-border, #ECECEC); border-radius: 30px; padding: 10px 22px; font-weight: 600; color: #1B1B1B; transition: border-color .2s ease, color .2s ease; }
        .btn-continue:hover{ border-color: var(--brand-secondary, #FD6000); color: var(--brand-secondary, #FD6000); }
        .cart-empty-state{ text-align: center; padding: 70px 20px; background: #fff; border: 1px solid var(--brand-border, #ECECEC); border-radius: 14px; }
        .cart-empty-state .icon{ font-size: 48px; margin-bottom: 16px; }
        .cart-empty-state h3{ font-weight: 800; margin-bottom: 8px; }
        .cart-empty-state p{ color: #6B7280; margin-bottom: 22px; }

        @media (max-width: 575px){
            .cart-item-card{ grid-template-columns: 70px 1fr; }
            .cart-item-side{ grid-column: 1 / -1; flex-direction: row; align-items: center; justify-content: space-between; margin-top: 8px; }
            .cart-item-card img{ width: 70px; height: 70px; }
        }
    </style>
@endsection

@section('content')

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding cart-page-wrap">
        <div class="container">
            <div class="section-title2 mb-4" data-aos="fade-up">
                <h1 class="title title-icon-both text-start" style="font-size:26px;font-weight:800;">Shopping Cart</h1>
                <p class="text-start">{{ $carts->count() }} item{{ $carts->count() == 1 ? '' : 's' }} in your cart</p>
            </div>

            @if($carts->count() == 0)
                <!-- Empty cart state -->
                <div class="cart-empty-state" data-aos="fade-up">
                    <div class="icon">🛒</div>
                    <h3>Your cart is empty</h3>
                    <p>Looks like you haven't added anything yet — let's fix that.</p>
                    <a href="{{ url('/') }}" class="btn-checkout" style="display:inline-block;width:auto;padding:12px 32px;">Start Shopping</a>
                </div>
            @else
                <div class="row">
                    <!-- Cart items -->
                    <div class="col-lg-8 col-12 mb-4" data-aos="fade-up">
                        @foreach($carts as $cart)
                            <div class="cart-item-card">
                                <a href="{{ route('single.product', [$cart->id, Str::slug($cart->name)]) }}">
                                    <img src="{{ asset('images/product/' . $cart->options->image) }}" alt="{{ $cart->name }}">
                                </a>

                                <div>
                                    <a href="{{ route('single.product', [$cart->id, Str::slug($cart->name)]) }}" class="cart-item-name">
                                        {{ $cart->name }}
                                    </a>
                                    <span class="cart-item-price">{{ env('CURRENCY') }}{{ $cart->price }}</span>

                                    <form action="{{ route('cart.update') }}" method="POST" class="cart-qty-form">
                                        @csrf
                                        <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                        <input type="number" name="qty" value="{{ $cart->qty }}" min="1">
                                        <button type="submit" class="btn-update">Update</button>
                                    </form>
                                </div>

                                <div class="cart-item-side">
                                    <span class="cart-item-subtotal">{{ env('CURRENCY') }}{{ $cart->price * $cart->qty }}</span>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                        <button type="submit" class="cart-remove-btn" title="Remove item">×</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                        <a class="btn-continue mt-2" href="{{ url('/') }}">← Continue Shopping</a>
                    </div>

                    <!-- Cart summary -->
                    <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="100">
                        <div class="cart-summary-card">
                            <h2 class="title">Order Summary</h2>
                            <div class="cart-summary-row">
                                <span>Subtotal</span>
                                <span class="amount">{{ env('CURRENCY') }}{{ Cart::subtotal() }}</span>
                            </div>
                            @if($discount > 0)
                            <div class="cart-summary-row">
                                <span>Discount</span>
                                <span class="amount">-{{ env('CURRENCY') }}{{ $discount }}</span>
                            </div>
                            @endif
                            <div class="cart-summary-row total">
                                <span>Total</span>
                                <span class="amount">{{ env('CURRENCY') }}{{ Cart::subtotal() - $discount }}</span>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn-checkout">Proceed to Checkout →</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection