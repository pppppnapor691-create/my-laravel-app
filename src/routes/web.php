<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CybersportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SuperController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, world!';
});

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/content', [ContactController::class, 'index'])->name('contact.index');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/super', [SuperController::class, 'index'])->name('super.index');

Route::get('/createTable', [CybersportController::class, 'createTable']);
Route::get('/create', [CybersportController::class, 'create']);
Route::get('/update', [CybersportController::class, 'update']);
Route::get('/delete', [CybersportController::class, 'delete']);
Route::get('/restore', [CybersportController::class, 'restore']);
Route::get('/count', [CybersportController::class, 'count']);

Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{cyber}', [PostController::class, 'show'])->name('post.show');
