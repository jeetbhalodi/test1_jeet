<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/admin', function () {
    return view('layouts/admin');
});

// Route::get('user', 'UserController@index');

Route::get('user', [UserController::class, 'index']);

Route::post('/save',[UserController::class, 'store']);

Route::get('/list',[UserController::class,'show']);

Route::get('delete/{id}',[UserController::class,'delete']);

Route::get('edit/{id}',[UserController::class,'edit']);

Route::post('update',[UserController::class,'updateStore']);