@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Users!</h1>
                        <p>Enjoy reading</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Post</p>
                        <a href="/registration/create/post" class="btn btn-primary btn-sm">Add User</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./register/{{ $post->id }}">{{ ucfirst($post->firstname) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No users available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection