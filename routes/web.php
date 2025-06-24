<?php

use App\Http\Controllers\SmkController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman daftar SMK
Route::get('/', [SmkController::class, 'index'])->name('smk.index');

// Route untuk halaman detail SMK
Route::get('/smk/{id}', [SmkController::class, 'show'])->name('smk.show');