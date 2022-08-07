@extends('admin.master')

@section('title')
    add Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Category</div>
                        <div class="card-body">
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                            <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-md-3 col-form-label">Category Image</label>
                                    <div class="col-md-9 ">
                                        <input type="file" class="form-control-file" name="image" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-md-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Create New Category</button>
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
