<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TesterController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pickLevel', [HomeController::class, 'formPick'])->name('pickLevel');
Route::post('/pickLevel',  [HomeController::class, 'Pick'])->name('pick');
Route::get('/Manager', [HomeController::class, 'Manager'])->name('Manager');
Route::get('/Manager/home', [HomeController::class, 'managerHome'])->name('managerHome');


Route::get('/Manager/new', [ManagerController::class, 'newManager'])->name('newManager');
Route::post('/Manager/new', [ManagerController::class, 'saveManager'])->name('saveManager');

Route::get('/Manager/testers/', [ManagerController::class, 'Testers'])->name('Testers');
Route::get('/Manager/testers/new', [ManagerController::class, 'newTesters'])->name('newTesters');
Route::post('/Manager/testers/new', [ManagerController::class, 'saveTesters'])->name('saveTesters');

Route::get('/Manager/testkits/', [ManagerController::class, 'testkits'])->name('testkits');
Route::get('/Manager/testkits/new', [ManagerController::class, 'newtestkits'])->name('newtestkits');
Route::post('/Manager/testkits/new', [ManagerController::class, 'savetestkits'])->name('savetestkits');

// Router For Patient
Route::get('/example/', function () {
    return view('example/index');
});

Route::get('/example/login', function () {
    return view('example/auth/login');
});



Route::get('/example/Manager/Tester/', function () {
    return view('example/Manager/tester');
});

Route::get('/example/Manager/Tester/new', function () {
    return view('example/auth/testerNew');
});

Route::get('/example/Manager/kit', function () {
    return view('example/Manager/test');
});

Route::get('/example/Manager/kit/new', function () {
    return view('example/Manager/newTestkit');
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


Route::get('/example/Patient/', function () {
    return view('example/Patient/home');
});

Route::get('/example/Patient/symptoms', function () {
    return view('example/auth/patientNew');
});