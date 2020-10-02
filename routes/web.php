<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** Routes */
Route::group(['prefix' => 'sch'], function() {
    Route::get('/form-students', ['App\Http\Controllers\Modules\School\SchStudentsController','index']);
    Route::post('/add-students', ['App\Http\Controllers\Modules\School\SchStudentsController','store'])->name('student.create');
    Route::get('/form-subjects', ['App\Http\Controllers\Modules\School\SchSubjectsController','index']);
    Route::post('/add-subjects', ['App\Http\Controllers\Modules\School\SchSubjectsController','store'])->name('subject.create');
});
