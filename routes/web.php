<?php

use App\Http\Controllers\Postcontroller;
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

Route::get('/',[Postcontroller::class,'home'] )->name('addpost');
Route::get('/all-post',[Postcontroller::class,'allpost'])->name('allpost');
Route::post('/store-post',[Postcontroller::class,'storepost'])->name('storepost');
Route::get('/editpost/{id}',[Postcontroller::class,'editpost'])->name('editpost');
Route::put('/updatepost/{id}',[Postcontroller::class,'updatepost'])->name('updatepost');
Route::delete('/deletepost/{id}',[Postcontroller::class,'deletepost'])->name('deletepost');