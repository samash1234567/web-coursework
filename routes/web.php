<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/users',[UserController::class, 'index'])->name('users.index');

Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');


Route::get('/posts',[PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');

Route::post('/posts',[PostController::class, 'store'])->name('posts.store');

Route::get('/post/{id}',[PostController::class, 'show'])->name('posts.show');


Route::get('/threads',[ThreadController::class, 'index'])->name('threads.index');

Route::get('/threads/create',[ThreadController::class, 'create'])->name('threads.create');

Route::post('/threads',[ThreadController::class, 'store'])->name('threads.store');

Route::get('/threads/{id}',[ThreadController::class, 'show'])->name('threads.show');


Route::get('/categories',[CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}',[CategoryController::class, 'show'])->name('categories.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
