<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('login');})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logados', function () { return view('logados');})->name('logados');


                            