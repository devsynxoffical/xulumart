@extends('layouts.laramart.master')

@section('title')
	{{ 'FAQs' . ' | '. env('APP_NAME') }}
@endsection

@section('style')
<style>
    .faq-page .faq-item{
        background:#fff; border:1px solid #ececec; border-radius:10px;
        padding:18px 20px; margin-bottom:14px; box-shadow:0 2px 10px rgba(0,0,0,.03);
    }
    .faq-page .faq-item h3{
        font-size:16px; font-weight:700; color:#1B1B1B; margin-bottom:8px;
    }
    .faq-page .faq-item p{ color:#555; margin:0; }
</style>
@endsection

@section('content')
<main class="main faq-page">
    <div class="page-content">
        <div class="container py-4">
            <h1 class="mb-4" style="font-size:26px;font-weight:800;color:#1B1B1B;">Frequently Asked Questions</h1>

            @forelse($faqs as $faq)
                <div class="faq-item">
                    <h3>{{ $faq->title }}</h3>
                    <p>{{ $faq->body }}</p>
                </div>
            @empty
                <p class="text-muted">No FAQs have been added yet. Please check back soon, or <a href="{{ route('contact') }}">contact us</a> with any questions.</p>
            @endforelse
        </div>
    </div>
</main>
@endsection