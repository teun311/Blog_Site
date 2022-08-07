@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">Edit Category</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="2">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Category Image</label>
                                    <div class="col-md-9 ">
                                        <img src="{{asset($category->image)}}" alt="" height="100" width="125">
                                        <input type="file" class="form-control" name="image" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Edit Category</button>
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

