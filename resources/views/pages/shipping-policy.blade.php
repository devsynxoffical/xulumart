@extends('layouts.laramart.master')

@section('title')
	{{ 'Shipping Policy' . ' | '. env('APP_NAME') }}
@endsection

@section('style')
<style>
    .policy-page .policy-card{
        background:#fff; border:1px solid #ececec; border-radius:12px;
        padding:28px; box-shadow:0 2px 14px rgba(0,0,0,.04);
    }
    .policy-page h2{ font-size:18px; font-weight:700; color:#1B1B1B; margin-top:22px; margin-bottom:10px; }
    .policy-page h2:first-child{ margin-top:0; }
    .policy-page p, .policy-page li{ color:#555; }
</style>
@endsection

@section('content')
<main class="main policy-page">
    <div class="page-content">
        <div class="container py-4">
            <h1 class="mb-4" style="font-size:26px;font-weight:800;color:#1B1B1B;">Shipping Policy</h1>
            <div class="policy-card">
                <h2>Delivery Areas</h2>
                <p>We currently deliver across Bangladesh. Delivery times and charges may vary depending on your location.</p>

                <h2>Processing Time</h2>
                <p>Orders are typically processed and dispatched within 1-2 business days of confirmation.</p>

                <h2>Delivery Time</h2>
                <ul>
                    <li>Inside Dhaka: 1-3 business days</li>
                    <li>Outside Dhaka: 3-7 business days</li>
                </ul>

                <h2>Tracking Your Order</h2>
                <p>You can check the status of your order anytime using the <a href="{{ route('order.track') }}">Track Order</a> page with your order code.</p>

                <h2>Questions?</h2>
                <p>If you have any questions about your delivery, please <a href="{{ route('contact') }}">contact us</a> and we'll be happy to help.</p>
            </div>
        </div>
    </div>
</main>
@endsection