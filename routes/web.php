<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//  return view('welcome'); });
Route::get('/' ,[PostController::class,'index'])->name('posts');
Route::get('/cards' ,[PostController::class,'card'])->name('cards');

// ! Catogry

// calling the pages
// Route::get('/categories',[CategoryController::class,'index']);
// Route::get('/categories/{id}',[CategoryController::class,'show']);
// Route::get('/categories/{create}',[CategoryController::class,'create']);
// Route::get('/categories/{id}/edit',[CategoryController::class,'edit']);
// // Data CRUD
// Route::post('/categories/store',[CategoryController::class,'store']);
// Route::delete('/categories/{id}',[CategoryController::class,'destroy']);
// Route::put('/categories/{id}/update',[CategoryController::class,'update']);

Route::resource('/categories',CategoryController::class);
