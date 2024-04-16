<?php

use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use PHPUnit\Framework\Attributes\PostCondition;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[UserController::class,'adminDashboard'])->name('dashboard');
     Route::post('/dashboard',[UserController::class,'adminInput'])->name('admin#input');
});

Route::group(['prefix'=>'post'], function(){
Route::post('genre/create',[GenreController::class,'createGenre'])->name('genre#create');
Route::get('create',[PostController::class,'postCreatePage'])->name('post#createPage');
Route::post('create',[PostController::class,'postCreate'])->name('post#create');
Route::get('delete/{id}',[PostController::class,'postDelete'])->name('post#delete');
Route::get('post/edit/page/{id}',[PostController::class,'postEditPage'])->name('post#editPage');
Route::post('post/update',[PostController::class,'postUpdate'])->name('post#update');
});
