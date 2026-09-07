@extends('layouts.master')

@section('title')
	{{ 'Latest News' . ' | '. env('APP_NAME') }}
@endsection

@section('style')
    <style type="text/css">
        .contact input.form-control{
            border: 0.5px solid #000;
        }
        .contact textarea.form-control{
            border: 0.5px solid #000;
        }
    </style>
@endsection

@section('content')
@php
	$news = App\Models\Blog::OrderBy('id', 'DESC')->paginate(8);
@endphp

		<main class="main border-top">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    
                    <div class="row">
                        @foreach($news as $item)
                        @php($route = route('post.details', ['slug'=>Str::slug($item->title), 's'=>$item->id]))
                        <div class="col-md-3 mb-4 shadow rounded">
                            <div class="card" >
                                <a href="{{$route}}">
                                    <img class="card-img-top" src="{{asset('images/blog/'.optional($item)->image)}}" alt="Card image cap">
                                </a>
                              <div class="card-body">
                                <h5 class="card-title"><a href="{{$route}}">{{optional($item)->title}}</a></h5>
                                <div class="card-text">{!!Str::limit(strip_tags($item->description) , 110, $end=' ....')!!}</div>
                                <div>
                                    <span class="post-on text-warning"></b>{{ date("d F Y", strtotime($item->created_at))}}.</span>
                                </div>
                                <div class="text-center pt-4"><a href="{{$route}}" class="btn btn-primary" style="background-color: #F6A546 !important; border: none !important; border-radius: 50px;">Read More</a></div>
                              </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="pagination justify-content-left pb-2 pt-2">
                        {{ $news->links('partials.pagination') }}
                        <small class="mt-1 fw-bold">Showing {{$news->firstItem()}} to {{$news->lastItem()}} of {{$news->total()}} News</small>
                    </ul>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>

@endsection