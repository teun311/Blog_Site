@extends('admin.master')

@section('title')
    add Blog
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header bg-secondary text-white font-weight-bold">Add Blog Form</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('blog.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Category Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" required name="category_id" id="">
                                            <option value="" disabled selected > <-- Select Category Name --> </option>
                                            @foreach($categoriess as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="main_title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Blog Sub Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="sub_title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Short Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="short_description" id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Long Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control summernote" name="long_description" id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label font-weight-bold">Feature Image</label>
                                    <div class="col-md-9 ">
                                        <input type="file" class="form-control-file" name="image" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Create New Blog</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
