<?php

use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EditorController;
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
Route::get('/ship', [ShippingController::class, 'index']);
// Route::get('/', [ArticleController::class, 'index']);
Route::get('/editor', [EditorController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/editor', [EditorController::class, 'index'])->name('editor');
});
