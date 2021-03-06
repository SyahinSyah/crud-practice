<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
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

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'destroy']);
Route::get('register', [LoginController::class, 'create']);
Route::get('home' , [Controller::class , 'home'])->name('login');

Route::group(['middleware' => ['auth']]  , function () {
    Route::get('/' , [BookController::class , 'index']);
    Route::get('/book/{author}', [AuthorController::class, 'index']);
    Route::redirect('/book', '/', 301);
    Route::get('/mybook', [BookController::class , 'view']);
});




// Route::get('home' , [Controller::class , 'home']);
// Route::get('/' , [BookController::class , 'index']);
// Route::get('/book/{author}', [AuthorController::class, 'index']);
// Route::get('register', [LoginController::class, 'create']);
// Route::get('login', [LoginController::class, 'index']);
// Route::post('login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'destroy']);
// Route::redirect('/book', '/', 301);



// Route::get('/', function () {
//     return view('welcome');
// });
