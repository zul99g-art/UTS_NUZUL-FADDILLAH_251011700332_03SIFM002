<?php

use App\Http\Controllers\InstrumentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InstrumentController::class, 'home'])->name('home');
Route::get('/alat-musik', [InstrumentController::class, 'index'])->name('instruments.index');
Route::get('/alat-musik/{instrument}', [InstrumentController::class, 'show'])->name('instruments.show');
