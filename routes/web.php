<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/auth', [LoginController::class, 'auth']);

Route::prefix('admin')->group( function() {
    Route::resource('/categories', CategoryController::class );
    Route::resource('/posts', PostController::class );
});
