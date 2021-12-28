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

Route::resources(['categories' => App\Http\Controllers\CategoryController::class,]);

Route::resources(['questionnair' => App\Http\Controllers\Admin\QuestionnairController::class,]);


// Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
// Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
// Route::post('categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
// Route::get('categories/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
// Route::get('categories/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
// Route::get('categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('categories/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
