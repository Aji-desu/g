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

Route::view('/detail', 'detail');
Route::get('/login', 'Authcontroller@getLogin');
Route::post('/login', 'Authcontroller@postLogin')->name('login');
Route::get('/register', 'Authcontroller@getRegister');
Route::post('/register', 'Authcontroller@postRegister')->name('register');
Route::view('/contact', 'contact');