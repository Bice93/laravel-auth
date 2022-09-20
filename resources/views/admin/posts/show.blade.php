@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <div class="card p-3">
                    <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}'s image">
                    <div class="card-body">
                        <h4>{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->post_content }}</p>
                    </div>
                    <div class="col-6 offset-md-3 text-center">
                        <a href="{{ route('admin.posts.edit', $post->id) }}"
                            class="btn btn-sm btn-success">Edit</a>
                        <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
