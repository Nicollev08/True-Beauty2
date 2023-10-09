<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;



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

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contra', [LoginController::class, 'contra']);

Route::get('/logout', [LogoutController::class, 'logout']);



Route::get('/tips', [HomeController::class, 'viewtips']);

Route::get('/services', [HomeController::class, 'viewservices']);

Route::get('/productos', [HomeController::class, 'viewproductos']);

Route::get('/crudproductos', 'ProductController@index')->name('home.masproductos');


Route::resource('/testimonies', TestimonyController::class )->names('testimonies');


Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});