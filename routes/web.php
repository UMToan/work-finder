<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});


//ROUTE AREA
Route::get('/areaList', function () {
    return view('areaList');
});

Route::get('/areaCreate', function () {
    return view('areaCreate');
});

Route::get('/areaUpdate', function () {
    return view('areaUpdate');
});

//ROUTE JOBS
Route::get('/applyJobsList', function () {
    return view('applyJobsList');
});

Route::get('/applyJobs', function () {
    return view('applyJobs');
});

Route::get('/jobsDetails', function () {
    return view('jobsDetails');
});


Route::get('/jobsList', function () {
    return view('jobsList');
});

Route::get('/jobsCreate', function () {
    return view('jobsCreate');
});

Route::get('/jobsUpdate', function () {
    return view('jobsUpdate');
});

// ROUTE  RESUME

Route::get('/resumeCreate', function () {
    return view('resumeCreate');
});

Route::get('/resumeUpdate', function () {
    return view('resumeUpdate');
});

Route::get('/resumeList', function () {
    return view('resumeList');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
