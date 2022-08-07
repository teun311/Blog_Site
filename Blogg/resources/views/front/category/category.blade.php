@extends('front.master')

@section('title')
    category blog
@endsection

@section('body')
    <section class="page-title overlay" style="background-image: url({{asset($img)}});">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">{{$name}}</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>{{$name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section p-3">
        <div class="container">
            <div class="row">
                <!-- blog-item -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top" src="{{asset($blog->image)}}" alt="blog-thumbnail">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="py-3 px-4 border-right text-center">
                                    <h3 class="text-primary mb-0">{{date('d',strtotime($blog->created_at))}}</h3>
                                    <p class="mb-0">{{date('M',strtotime($blog->created_at))}}</p>
                                </div>
                                <div class="p-3">
                                    <a href="{{route('blog-detail',['id'=>$blog->id])}}" class="h4 font-primary text-dark">{{$blog->main_title}}</a>
                                    <p>by:{{$blog->author->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
