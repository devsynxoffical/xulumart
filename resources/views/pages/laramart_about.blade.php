@extends('layouts.laramart.master')
@section('content')
<!-- Page Title/Header Start -->
<div class="page-title-section section" data-bg-image="assets/images/bg/page-title-1.webp">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-title">
                    <h1 class="title">About Laramart </h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">About us </li>
                    </ul>
                </div>
                @php
                  $aboutPage = $page ?? DB::table('pages')->where('name', 'About Us')->first();
                @endphp
            </div>
        </div>
    </div>
</div>

<!-- Page Title/Header End -->

<div class="section section-fluid section-padding pt-0">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-lg-6 col-12 text-center learts-mb-30">
                <img class="rounded p-4" src="{{ $aboutPage && $aboutPage->image ? asset('images/website/'.$aboutPage->image) : asset('frontend/assets/images/placeholder.webp') }}"  width="100%" alt="">
            </div>

            <div class="col-lg-6 col-12 align-self-center learts-mb-30">
                <div class="about-us4">
                    <div class="row learts-mb-n30">
                            <div class="desc mb-0  ">
                                {!! $aboutPage->description !!}
                            </div>                      
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>

<div class="container" >
    <div class="row mt-5">
        
        {{-- <h2 class="title mt-5"> Our Mission </h2> --}}
        
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Our Mission</h3>
                </div>
                <div class="card-body">
                    {!! $aboutPage->description1 !!}
                </div>
                
              </div>
           
        </div>
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Our Vision</h3>
                </div>
                <div class="card-body">
                    {!! $aboutPage->description1 !!}
                </div>
                
              </div>
           
        </div>
        {{-- <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Statement of Philosophy </h3>
                </div>
                <div class="card-body">
                    {!! $aboutPage->description1 !!}
                </div>                
            </div>
           
        </div> --}}
    </div>
</div>

@endsection