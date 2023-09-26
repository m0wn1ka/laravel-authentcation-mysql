@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>welcome to the page</p> <br>
                <a href="/register" class="btn btn-outline-primary">Show register page</a>
            </div>
        </div>
    </div>
@endsection