<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{page}', function ($page) {
//     return view('pages.' . $page);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/fatima', function () {
    return view('fatima');
});