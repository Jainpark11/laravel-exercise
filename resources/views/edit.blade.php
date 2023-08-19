@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h4>edit Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn-sm btn-warning" href="">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <select name="" id="" class="form-control">
                            <option value="">test1</option>
                            <option value="">test2</option>
                            <option value="">test3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">설명</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
