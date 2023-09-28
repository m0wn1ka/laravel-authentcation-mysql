## requirements
xampp or wapp<br>
node<br>
code editor<br>
## what it does
home page with navbar,on clicking registration  button ,in a i frame registration form will open once you register your data will be stored in db,and you will be redirected ,
login button is not responsive
### reference link
https://www.section.io/engineering-education/laravel-beginners-guide-blogpost/
### changes need to be done
the file resources/views/welcometest.blade.php will replace login.blade.php
<br>
image(image_slider.jpg) which is in public folder in my github need to be added as there is a use of relative url
<br>
iframe,iframe2(both blade.php) files needed to be added into views folder
<br>
the file resources/views/registration/create.blade.php needs to be added 
<br>
the file app/http/controller/registraitoncontroller.php need to be added
<br>
the file app/http/models/registration.php need to be added
<br>
app/database/migrations/2023_09_26_091040_create_registrations_table.php added
<br>
these routes needed to be added to web.php
```
Route::get('/', function () {
    return view('welcometest');
});
Route::get('/iframe', function () {
    return view('iframe');
});
Route::get('/iframe2', function () {
    return view('iframe2');
});

Route::get('/register', [\App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegistrationController::class, 'store']);
```