@extends('admin.master')
@section('title')
    details
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Blog Details Info</h4>
                </div>
                <div class="card-body ">
                    <table class="table table-bordered ">
                        <tr>
                            <th>Blog Id </th>
                            <td>{{$blog->id}}</td>
                        </tr>
                        <tr>
                            <th>Blog Category </th>
                            <td>{{$blog->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Blog Author </th>
                            <td>{{$blog->author->name}}</td>
                        </tr>
                        <tr>
                            <th>Blog Main Title </th>
                            <td>{{$blog->main_title}}</td>
                        </tr>
                        <tr>
                            <th> Blog Subtitle </th>
                            <td>{{$blog->sub_title}}</td>
                        </tr>
                        <tr>
                            <th>Blog Short Description </th>
                            <td>{{$blog->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Blog Long Description </th>
                            <td>{!! $blog->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Blog image </th>
                            <td><img src="{{asset($blog->image)}}" alt="" height="150"width="200"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
