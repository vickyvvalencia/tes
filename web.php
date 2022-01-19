<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
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
    return view('index');
});
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'store']);



Route::get('/Admin/index',[AdminController::class,'login']);
Route::get('/Admin/login',[AdminController::class,'login']);
Route::get('/Admin/daftar_pengaduan',[AdminController::class,'daftar_pengaduan']);

Route::get('/Users/pengaduan_baru',[UsersController::class,'pengaduan_baru']);
Route::get('/Users/pengaduan_saya',[UsersController::class,'pengaduan_saya']);
Route::get('/Users/detail_pengaduan',[UsersController::class,'detail_pengaduan']);
Route::get('/Users/index',[UsersController::class,'index']);


Route::post('api/admin_session',[AuthController::class,'admin_session']);
Route::post('api/users_session',[AuthController::class,'users_session']);