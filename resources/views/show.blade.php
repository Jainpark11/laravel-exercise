@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h4>글내용</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn-sm btn-warning" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <td>이미지</td>
                            <td><img src="{{ asset($post->image) }}"></td>
                        </tr>
                        <tr>
                            <td>제목</td>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <td>내용</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                        <tr>
                            <td>카테고리</td>
                            <td>{{ $post->category_id }}</td>
                        </tr>
                        <tr>
                            <td>발행일</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
