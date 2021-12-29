<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::get('auth/google', [App\Http\Controllers\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('google/callback', [App\Http\Controllers\GoogleSocialiteController::class, 'handleCallback']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cuntactUs', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('cuntactus');

Route::get('/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

Route::get('/categories' , [App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');

Route::resources(['questionnair' => App\Http\Controllers\Admin\QuestionnairController::class,]);

