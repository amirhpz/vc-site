<?php

use App\Http\Controllers\site\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('/');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/events', [IndexController::class, 'events'])->name('events');
Route::get('/events/{slug}', [IndexController::class, 'eventShow'])->name('events.show');
Route::get('/news', [IndexController::class, 'news'])->name('news');
Route::get('/news/{slug}', [IndexController::class, 'newsShow'])->name('news.show');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');

Route::get('/theme/{theme}', function (Request $request, $theme) {

    abort_unless(
        in_array($theme,['light','dark']),
        404
    );

    session([
        'theme' => $theme
    ]);

    $redirect = $request->query('redirect');

    if (filled($redirect) && str_starts_with($redirect, url('/'))) {
        return redirect()->to($redirect);
    }

    return back();

})->name('theme.switch');

Route::get('/lang/{locale}', function ($locale) {

    abort_unless(
        in_array($locale,['fa','en']),
        404
    );

    session([
        'locale' => $locale
    ]);

    app()->setLocale($locale);

    return back();

})->name('language.switch');
