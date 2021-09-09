<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
route::get('laporan','home@index');
Route::view('/', 'home');
route::view('tentang','page.tentang');
route::view('saran','page.saran');
route::get('login','AuthController@getlogin');
route::post('login','AuthController@postlogin')->name('login');
route::get('registrasi','AuthController@getregis');
route::post('registrasi','AuthController@postregis')->name('registrasi');