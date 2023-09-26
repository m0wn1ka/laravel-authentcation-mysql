@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/register" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->firstname) }}</h1>
                <p>{!! $post->lastname !!}</p> 
                <hr>
                <a href="/register/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Profile</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
