<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\yaranMadakiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('auth.login');
// });
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class,'create']);
Route::post('/madaki-house/store', [HomeController::class,'store']);
// -----------------------------------------------------------------------------------------------
Route::get('/yaran_madaki',[yaranMadakiController::class, 'index'])->name('home');
Route::get('/yaran_madaki/create_md_childs',[yaranMadakiController::class, 'create']);
Route::post('/madaki-childs/store', [yaranMadakiController::class,'store']);




