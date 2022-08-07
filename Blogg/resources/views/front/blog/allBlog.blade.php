@extends('front.master')
@section('title')
    all blog
@endsection

@section('body')
<secton class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 ">
                <div class="accordion" id="">
                    <div class="card border-0">
                        <div class="card-header text-center rounded-0" id="headingOne">
                            <h3 class="mb-0 mt-2 d-inline-block">All Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- blog item -->
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-sm-6 mb-4 py-1 border-bottom mb-lg-0">
                <div class="card">
                    <img class="card-img-top" src="{{asset($blog->image)}}" alt="news-thumbnail">
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom">
                            <h6 class="text-primary">{{date('d M Y',strtotime($blog->created_at))}}</h6>
                            <a href="{{route('blog-detail',['id'=>$blog->id])}}" class="h4 card-title font-primary text-dark">{{$blog->main_title}}</a>
                            <p class="card-text">{{$blog->short_description}}</p>
                        </div>
                        <p class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-user"></i>{{$blog->author->name}}</p>
                        <p class="card-link d-inline-block text-color p-2"><i class="text-primary mr-2 ti-comments-smiley"></i>30
                            Comments</p>
                        <p class="card-link d-inline-block text-color p-2 px-3 float-right border-left"><i
                                class="text-primary ti-share"></i></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</secton>


@endsection
