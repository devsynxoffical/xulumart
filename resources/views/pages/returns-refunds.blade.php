@extends('layouts.laramart.master')

@section('title')
	{{ 'Returns & Refunds' . ' | '. env('APP_NAME') }}
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
            <h1 class="mb-4" style="font-size:26px;font-weight:800;color:#1B1B1B;">Returns &amp; Refunds</h1>
            <div class="policy-card">
                <h2>Return Eligibility</h2>
                <p>If you're not satisfied with your order, you can request a return within 7 days of delivery, provided the item is unused, in its original packaging, and in the condition you received it.</p>

                <h2>How to Request a Return</h2>
                <p>Contact our support team via the <a href="{{ route('contact') }}">Contact Us</a> page with your order code and the reason for the return. We'll guide you through the next steps.</p>

                <h2>Refunds</h2>
                <p>Once your return is received and inspected, we'll notify you of the approval status. Approved refunds are processed back to your original payment method, or as store credit for Cash on Delivery orders, within 5-7 business days.</p>

                <h2>Non-Returnable Items</h2>
                <p>Certain items - such as intimate wear, perishable goods, or items marked as final sale - are not eligible for return.</p>

                <h2>Questions?</h2>
                <p>For any return or refund questions, please <a href="{{ route('contact') }}">contact us</a> and we'll be happy to help.</p>
            </div>
        </div>
    </div>
</main>
@endsection