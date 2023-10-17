<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ServiceController;
use App\Models\User;

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
    return view('home.index');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


Route::get('/home', [HomeController::class, 'index']);

Route::get('/contra', [LoginController::class, 'contra']);

Route::get('/logout', [LogoutController::class, 'logout']);



Route::post('/perfil', [UserController::class, 'updateperfil'])->name('updateperfil');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');


Route::get('/crudproduct', [ProductController::class, 'index'])->name('product.index');
Route::resource('products', ProductController::class);

Route::get('/crudservices', [ServiceController::class, 'index'])->name('service.index');
Route::resource('services', ServiceController::class);


Route::get('/opiniones', [CommentController::class, 'index'])->name('comments.index');
Route::resource('comments', CommentController::class);




Route::get('/users', [AdminController::class, 'viewusers'])->name('users.index');
Route::resource('user', UserController::class);




Route::get('/perfil', [HomeController::class, 'viewperfil']);

Route::get('/tips', [HomeController::class, 'viewtips']);

Route::get('/services', [HomeController::class, 'viewservices']);

Route::get('/productos', [HomeController::class, 'viewproductos']);





Route::resource('/testimonies', TestimonyController::class )->names('testimonies');