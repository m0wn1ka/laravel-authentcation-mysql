```php artisan make:model BlogPost````
This will create a file called BlogPost.php inside our App/Models folder<br>
database folder – This folder contains database migrations, factories and seeds. Migrations are database tables definitions such as columns and their datatypes, necessary keys definitions etc.
<br>
```php artisan make:migration create_blog_posts_table```
in databases/migrations folder a file is created<br>
inside the file write schema in up()<br>
```php artisan migrate``` to make migrations
-----------------
All web routes are stored in routes/web.php file.
============
php artisan make:factory RegistrationFactory --model=Registration
to create a factory
<br>
In Laravel, a factory is a convenient way to generate fake or sample data for testing or development purposes. It allows you to create model instances with predefined attributes quickly
<br>
Inside the database/factories folder, a file will appear with the name RegistrationFactory.php.
<br>
add this in registration factory 
```
            'firstname' => $this->faker->sentence, //Generates a fake sentence
            'lastname' => $this->faker->sentence, //generates fake 30 paragraphs
            'user_id' => User::factory() ```
            ============
            Now that we have created our factory, it’s time to create a seeder to seed our database. We will do this using PHP artisan tinker. Tinker is a command line tool that is shipped with Laravel to enable data manipulation without changing the code during development, it’s a good tool to do seeding and test relationships
            ===========
            now type```php artisan tinker```
            then 
```\App\Models\model_name::factory()->times(10)->create();```
<br>
```php artisan make:controller RegistrationController --model=Registration
 INFO  Controller [C:\xampp\htdocs\my-blog\app/Http/Controllers/RegistrationController.php] created successfully.```
 <br>
 in routes/web.php
 ```Route::get('/blog', [\App\Http\Controllers\RegistrationController::class, 'index']);
```
inside create resources/views/layouts/app.blade.php
write
```
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        //Include bootstrap CSS CDN here

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>

    @yield('content')

    </body>
    //Include bootstrap JS CDN here 
</html>
```
now exten the app.blade and welcome.blade
==========
now in registraiont controller 
```
public function index()
    {
        $posts = Registration::all(); //fetch all blog posts from DB
        return view('registration.index', [
                'posts' => $posts,
            ]); //returns the view with posts
    }

    ```
    for this we create a folder name registration in views and inside that we need to make a file called index.blade.php
    ```
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
    ```
    in registration controller
    ```  public function show(Registration $registration)
    {
        return $registration;
    }```
    and in web.php
    ```Route::get('/register/{registration}', [\App\Http\Controllers\RegistrationController::class, 'show']);
```
registration controller
```public function show(Registration $registration)
    {
        
    return view('registration.show', [
        'post' => $registration,
    ]);
        
    }```
    in views/registration/show.blade.php
    ```
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
====================
## adding user
``` public function create()
    {
        return view('registration.create');
    }
    ```
    in views/registration/create.blade.php
    ```
    ```
    @extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/register" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New User</h1>
                    <p>Fill and submit this form to create a user</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">firstname</label>
                                <input type="text" id="firstname" class="form-control" name="firstname"
                                       placeholder="Enter first name" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="lastname">lastname</label>
                                <input type="text" id="lastname" class="form-control" name="lastname"
                                       placeholder="Enter last name" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

    ```
    add this route to web.php
    ==================
    ## accepting user data
    in registration controlloer 
    ```public function store(Request $request)
    {
        $newPost = Registration::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            
        ]);

        return redirect('register/' . $newPost->id);
    }```
    ->now in registarion model
    ``` protected $fillable = ['firstname', 'lastname'];
```