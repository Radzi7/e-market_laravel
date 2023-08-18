<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    Route::get('/posts', 'IndexController' )->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

// Route::get('posts', [PostController::class, 'index'])->name('post.index');
// Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
// Route::post('posts', [PostController::class, 'store'])->name('post.store');
// Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
// Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::put('posts/{post}', [PostController::class, 'update'])->name('post.update');
// Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('post.delete');

// Route::get('/posts/update', [PostController::class, 'update']);
// Route::get('/posts/delete', [PostController::class, 'delete']);
Route::group([ 'prefix' => 'admin'], function(){
        Route::group(['namespace'=>'App\Http\Controllers\Admin\Post'], function(){

        Route::get('/post',  'IndexController')->name('admin.post.index');
    });
});



Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
