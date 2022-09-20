@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Autore</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->name_user }}</td>
                                <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->post_date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <h5>Non ci sono post da visualizzare!</h5>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
