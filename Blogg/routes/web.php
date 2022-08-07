<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
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

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/blog-category/{id}',[FrontController::class,'category'])->name('blog-category');
Route::get('/blog-detail/{id}',[FrontController::class,'detail'])->name('blog-detail');
Route::get('/blog-all',[FrontController::class,'allBlog'])->name('blog-all');
Route::get('/blog-contact',[FrontController::class,'blogContact'])->name('blog-contact');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->get('/add-user',[UserController::class,'index'])->name('user.add');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->post('/new-user',[UserController::class,'create'])->name('user.new');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->get('/manage-user',[UserController::class,'manage'])->name('user.manage');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->get('/edit-user/{id}',[UserController::class,'edit'])->name('user.edit');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->post('/update-user/{id}',[UserController::class,'update'])->name('user.update');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','superAdmin'])->get('/delete-user/{id}',[UserController::class,'delete'])->name('user.delete');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category',[CategoryController::class,'index'])->name('category.add');
    Route::post('/create-category',[CategoryController::class,'create'])->name('category.new');
    Route::get('/manage-category',[CategoryController::class,'manage'])->name('category.manage');
    Route::get('/edit-category/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update-category/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/delete-category/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/update-category-status/{id}',[CategoryController::class,'updateStatus'])->name('category.status');

    Route::get('/add-blog',[BlogController::class,'index'])->name('blog.add');
    Route::post('/new-blog',[BlogController::class,'create'])->name('blog.new');
    Route::get('/manage-blog',[BlogController::class,'manage'])->name('blog.manage');
    Route::get('/detail-blog-info/{id}',[BlogController::class,'detail'])->name('blog.detail');
    Route::get('/edit-blog/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/update-blog/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('/delete-blog/{id}',[BlogController::class,'delete'])->name('blog.delete');
    Route::get('/update-blog-status/{id}',[BlogController::class,'updateStatus'])->name('blog.status');

});
