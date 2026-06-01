<?php

use App\Http\Controllers\site\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.index');
});


Route::get('/', [IndexController::class, 'index'])->name('/');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/events', [IndexController::class, 'events'])->name('events');
Route::get('/news', [IndexController::class, 'news'])->name('news');
Route::get('/news/{slug}', [IndexController::class, 'newsShow'])->name('news.show');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');
