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
    Route::get('/show/{id}', [SupportController::class, 'show'])->name('support.show');
    Route::get('/{id}/edit', [SupportController::class, 'edit'])->name('support.edit');
    Route::put('/{id}/update', [SupportController::class, 'update'])->name('support.update');
    Route::delete('/{id}', [SupportController::class, 'destroy'])->name('support.delete');
});


