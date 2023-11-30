<?php

use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test',[TestController::class, 'show'] );

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    // Route::resource('article', ArticleController::class)->only([
    //     'show', 'seed' , 'truncate'
    // ]);
    // Route::get('/article',[ArticleController::class, 'index'])->name('article');


    Route::controller(ArticleController::class)->prefix('article')->group(function() {
        Route::get('/','index')->name('article');
        Route::get('/seed','seed');
        Route::get('/show','show');
        Route::get('/truncate','truncate');
    });
    Route::get('/editor', [EditorController::class, 'index'])->name('editor');
});

Route::controller(TestController::class)->prefix('test')->group(function (){
    Route::get('/','show');
    Route::get('/seed','seed');
    Route::get('truncate','truncate');
});
