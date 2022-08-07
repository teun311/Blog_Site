@extends('front.master')

@section('title')
    home
@endsection

@section('body')
    <!--slide -->
    <section>

        <div class="hero-slider position-relative">
            @foreach($categories as $category)
            <div class="hero-slider py-160" style="background-image: url({{asset($category->image)}});"
                 data-text="{{$category->name}}" >
                <div class="container">
                    <div class="row">
                        <div class="col-9 mx-auto">
                            <div class="hero-content ">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".1">We
                                    are here to</h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".5">
                                   {{$category->name}}</h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft" data-delay-in=".9">{{$category->description}}
                                    <br>
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3" href="" onclick="event.preventDefault();"
                                   class="btn btn-outline text-uppercase">more details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach
        </div>

    </section>
    <!-- service -->
    <section class="section p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title section-title-border">Latest Recent Blog</h2>
                </div>
                <!-- service item -->
                @foreach($recent_blogs as $recent_blog)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset($recent_blog->image)}}" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{$recent_blog->main_title}}</h4>
                            <p class="card-text mx-2 mb-0">{{$recent_blog->short_description}}</p>
                            <a href="{{route('blog-detail',['id'=>$recent_blog->id])}}" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
