<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Router For Patient
Route::get('/patient/', function () {
    return view('patient/home');
});  


// Route::group(['middleware' => 'role:super-admin'], function() {
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Router For Patient
Route::get('/example/', function () {
    return view('example/index');
});

Route::get('/example/login', function () {
    return view('example/auth/login');
});

Route::get('/example/Manager/new', function () {
    return view('example/auth/managerNew');
});


Route::get('/example/Tester/', function () {
    return view('example/Tester/home');
});

Route::get('/example/Tester/new', function () {
    return view('example/Tester/new');
});

Route::get('/example/Tester/update', function () {
    return view('example/Tester/new');
});

Route::get('/example/Tester/result', function () {
    return view('example/Tester/result');
});