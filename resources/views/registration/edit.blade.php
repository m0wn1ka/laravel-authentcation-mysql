@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/register" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit User</h1>
                    <p>Edit and submit this form to update a user</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">firstname</label>
                                <input type="text" id="firstname" class="form-control" name="firstname"
                                       placeholder="Enter firstname" value="{{ $post->firstname }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="lastname">lastname</label>
                                <input type="text" id="lastname" class="form-control" name="lastname"
                                       placeholder="Enter lastname" value="{{ $post->lastname }}" required>
                            
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
