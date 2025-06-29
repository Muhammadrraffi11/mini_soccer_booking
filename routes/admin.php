<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/approve-booking/{id}', [AdminController::class, 'approve']);
Route::post('/admin/cancel-booking/{id}', [AdminController::class, 'cancel']);
Route::get('/admin/data-booking', [AdminController::class, 'dataBooking']);
Route::get('/admin/data-user', [AdminController::class, 'dataUser'])->name('admin.data-user');
Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.delete-user');
Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
