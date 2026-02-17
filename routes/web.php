<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

\App\Http\Middleware\SetLanguage::class;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([\App\Http\Middleware\SetLanguage::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
});


// Route::get('lang/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     App::setLocale($lang);
//     return redirect()->back();
// });



// Route::get('/books', [BooksController::class, 'index'])->name('books.index');
