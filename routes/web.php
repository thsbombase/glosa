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
Auth::routes();

Route::view('/', 'home')->name('home');
Route::view('/dashboard', 'dashboard.index')->name('dashboard');
Route::view('/create-note', 'dashboard.createnote')->name('createnote');
Route::view('/edit-note', 'dashboard.editnote')->name('editnote');
Route::view('/note', 'dashboard.viewnote')->name('viewnote');
