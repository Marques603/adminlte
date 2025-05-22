<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

route::get('/users', [UserController::class, 'index'])->name('users.index');
route::get('/users/create', [UserController::class, 'create'])->name('users.create');
});