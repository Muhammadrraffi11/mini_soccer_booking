<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Field;

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::post('/user/book', [UserController::class, 'book'])->name('user.book');
Route::post('/user/cancel/{id}', [UserController::class, 'cancel'])->name('user.cancel');

Route::get('/booking', function () {
    $fields = Field::all();
    return view('user.booking', compact('fields'));
});
Route::get('/promo', function () {
    return view('user.promo');
});
Route::get('/kontak', function () {
    return view('user.kontak');
});
