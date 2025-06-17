<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Models\TipeTicket;

Route::get('/tiket', [TiketController::class, 'index']);
Route::post('/tiket/output', [TiketController::class, 'output'])->name('tiket.output');
