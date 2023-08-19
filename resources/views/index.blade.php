@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h4>All Posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn-sm btn-success" href="{{ route('posts.create') }}">Create</a>
                    <a class="btn-sm btn-warning" href="">Trashed</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">설명</th>
                            <th scope="col" style="width: 10%">카테고리</th>
                            <th scope="col" style="width: 10%">날짜</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>
                                    <img src="{{ asset($post->image) }}" alt="" width="80">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->category_id }}</td>
                                <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                <td>
                                    <a class="btn-sm btn-success btn" href="{{ route('posts.show', $post->id) }}">보기</a>
                                    <a class="btn-sm btn-primary btn" href="{{ route('posts.edit', $post->id) }}">수정</a>
                                    {{-- <a class="btn-sm btn-danger btn" href="">삭제</a> --}}
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-sm btn-danger btn">삭제</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
