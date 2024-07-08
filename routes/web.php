<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\TopNavbarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\DaftarController;

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
})->middleware('auth');

Route::get('/Navbar', 'App\Http\Controllers\NavbarController@navbar')->name('navbar');
Route::get('/TopNavbar', 'App\Http\Controllers\TopNavbarController@topnavbar')->name('topnavbar');
Route::get('/Login', 'App\Http\Controllers\AuthController@loginview')->name('login.view');
Route::post('/Login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/Logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/Register', 'App\Http\Controllers\AuthController@registerview')->name('register.view');
Route::post('/Register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::get('/Admin', 'App\Http\Controllers\AdminController@index')->middleware('auth');
Route::get('/Admin/{id}/edit', 'App\Http\Controllers\AdminController@edit')->middleware(['auth']);
Route::put('/Admin/{id}',  'App\Http\Controllers\AdminController@update')->middleware(['auth']);
Route::delete('/Admin/{id}',  'App\Http\Controllers\AdminController@destroy')->middleware(['auth']);
Route::post('/Admin', 'App\Http\Controllers\AdminController@store')->middleware(['auth']);
Route::get('/Beranda', 'App\Http\Controllers\BerandaController@beranda')->name('beranda');
Route::get('/BerandaIn', 'App\Http\Controllers\BerandaInController@berandain')->name('berandain');
Route::get('/Profil', 'App\Http\Controllers\ProfilController@index')->name('profil')->middleware(['auth']);
Route::post('/Profil', 'App\Http\Controllers\ProfilController@store')->name('profil.store')->middleware(['auth']);
Route::get('/Daftar/{id?}', [DaftarController::class, 'index'])->name('daftar.index');
Route::post('/Daftar', 'App\Http\Controllers\DaftarController@store')->name('daftar')->middleware(['auth']);