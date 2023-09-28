<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcometest');
});
Route::get('/iframe', function () {
    return view('iframe');
});
Route::get('/iframe2', function () {
    return view('iframe2');
});
Route::get('/users', [\App\Http\Controllers\RegistrationController::class, 'index']);
Route::get('/register/{registration}', [\App\Http\Controllers\RegistrationController::class, 'show']);
Route::get('/register', [\App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegistrationController::class, 'store']);
Route::get('/mail',[\App\Http\Controllers\MailController::class, 'basic_email']);

Route::get('/register/{registration}/ed it', [\App\Http\Controllers\RegistrationController::class, 'edit']);
Route::put('/register/{registration}/edit', [\App\Http\Controllers\RegistrationController::class, 'update']);
Route::delete('/register/{registration}', [\App\Http\Controllers\RegistrationController::class, 'destroy']);
