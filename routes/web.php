<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Routes for supports
Route::prefix('/supports')->group(function(){
    Route::post('/post', [SupportController::class, 'store'])->name('support.store');
    Route::get('/create', [SupportController::class, 'create'])->name('support.create');
    Route::get('/index', [SupportController::class, 'index'])->name('support.index');
});
