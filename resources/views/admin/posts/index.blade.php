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
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->post_date }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <p>Non ci sono post da visualizzare!</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
