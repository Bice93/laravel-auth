@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <div class="card">
                    <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}'s image">
                    <div class="card-body">
                        <h4>{{ $post->title }}</h4>
                        <p class="card-text">{{ $post->post_content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
