@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h4>create Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn-sm btn-warning" href="">Back</a>
                </div>
            </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select id="" class="form-control" name="category_id">
                            <option value="">Select</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">설명</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
