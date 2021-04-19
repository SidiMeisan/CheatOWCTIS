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
    return redirect('/login');
});


// Route::group(['middleware' => 'role:super-admin'], function() {
// });

Auth::routes();


// After login
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::get('/pickLevel', [HomeController::class, 'formPick'])->name('pickLevel');
Route::post('/pickLevel',  [HomeController::class, 'Pick'])->name('pick');
Route::get('/Manager/new', [ManagerController::class, 'newManager'])->name('newManager');
Route::post('/Manager/new', [ManagerController::class, 'saveManager'])->name('saveManager');


Route::prefix('Manager')->middleware(['middleware' => 'role:Manager'])->group(function () {
    Route::get('/', [HomeController::class, 'Manager'])->name('Manager');
    Route::get('/home', [HomeController::class, 'managerHome'])->name('managerHome');
    Route::get('/test', [ManagerController::class, 'covidTest'])->name('covidTest');


    Route::get('/testers/', [ManagerController::class, 'Testers'])->name('Testers');
    Route::get('/testers/new', [ManagerController::class, 'newTesters'])->name('newTesters');
    Route::post('/testers/new', [ManagerController::class, 'saveTesters'])->name('saveTesters');

    Route::get('/testkits/', [ManagerController::class, 'testkits'])->name('testkits');
    Route::get('/testkits/new', [ManagerController::class, 'newtestkits'])->name('newtestkits');
    Route::post('/testkits/new', [ManagerController::class, 'savetestkits'])->name('savetestkits');

    Route::get('/testkits/edit/{id}', [ManagerController::class, 'editTestkits'])->name('editTestkits');
    Route::post('/testkits/edit/{id}', [ManagerController::class, 'updattestkits'])->name('updattestkits');
    Route::get('/testkits/edit/{id}/delete', [ManagerController::class, 'deletekit'])->name('deletekit');


    Route::get('/testkits/add', [ManagerController::class, 'addTestkits'])->name('addTestkits');
    Route::post('/testkits/add', [ManagerController::class, 'addStock'])->name('addStock');
});

Route::prefix('Tester')->middleware(['middleware' => 'role:Tester'])->group(function () {
    Route::get('/', function () {
        return view('/Tester/home');
    });
    Route::get('/home', [HomeController::class, 'testerHome'])->name('testerHome');
    Route::get('/test/', [TesterController::class, 'covidTest'])->name('covidTest');
    Route::get('/test/new', [TesterController::class, 'newTest'])->name('newTest');
    Route::post('/test/new', [TesterController::class, 'saveTest'])->name('saveTest');
    Route::get('/test/{id}', [TesterController::class, 'updateTestForm'])->name('updateTestForm');
    Route::post('/test/{id}', [TesterController::class, 'updateTest'])->name('updateTest');


    Route::get('/test/result/{id}', [TesterController::class, 'newResult'])->name('newResult');
    Route::post('/test/result/{id}', [TesterController::class, 'saveResult'])->name('saveResult');
});

Route::prefix('Patient')->middleware(['middleware' => 'role:Patient'])->group(function () {
    Route::get('/', function () {
        return view('/Patient/home');
    });
    Route::get('/home', [HomeController::class, 'patientHome'])->name('patientHome');
    Route::get('/test/', [PatientController::class, 'covidTest'])->name('covidTest');
});

