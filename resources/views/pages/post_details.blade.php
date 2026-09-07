@extends('layouts.master')

@section('title') {{optional($news_info)->title}} @endsection
@section('description'){{optional($news_info)->meta_description}} @endsection
@section('keywords'){{optional($news_info)->meta_keywords}}@endsection

@section('content')
@php
	$news = App\Models\Blog::OrderBy('id', 'DESC')->where('id', '!=', optional($news_info)->id)->paginate(10);
@endphp
		<main class="main border-top">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('index')}}">Blog</a></li>
                        <li><a href="#">{{optional($news_info)->title}}</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="{{asset('images/blog/'.optional($news_info)->image)}}" alt="{{optional($news_info)->title}}">
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">King Umbrella.</a>
                                        - <a href="#" class="post-date">{{ date("d F Y", strtotime($news_info->created_at))}}</a>
                                    </div>
                                    <h2 class="post-title" title="{{optional($news_info)->title}}"><a href="#">{{optional($news_info)->title}}</a></h2>
                                    <div class="post-content">
                                        {!!optional($news_info)->description!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar pt-2 blog-sidebar sidebar-fixed sticky-sidebar-wrapper" style="border: 2px solid #F7B466; border-radius: 10px;">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="pin-wrapper" style="height: 1507.42px;"><div class="sticky-sidebar sticky-sidebar-fixed" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px; position: absolute; top: 427.578px;">
                                    
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Recent Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper " id="swiper-wrapper-88fe04ba2db4deb9" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                        <div class="swiper-slide widget-col swiper-slide-active" role="group" aria-label="1 / 2" style="width: 280px; margin-right: 20px;">
                                                            
                                                            @foreach($news as $item)
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{asset('images/blog/'.optional($item)->image)}}" alt="150" height="150">
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="{{route('post.details', ['slug'=>Str::slug($item->title), 's'=>$item->id])}}" class="post-date">{{ date("d F Y", strtotime($item->created_at))}}</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="{{route('post.details', ['slug'=>Str::slug($item->title), 's'=>$item->id])}}">{{optional($item)->title}}</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    
                                </div></div>
                            </div>
                        </aside>
                    </div>
                    
                </div>
            </div>
            <!-- End of Page Content -->
        </main>

@endsection