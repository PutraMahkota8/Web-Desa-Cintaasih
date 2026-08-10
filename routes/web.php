<?php

use App\Http\Controllers\AsesmentController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;


Route::get('/', [LandingPageController::class, 'index']);
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/mata-pelajaran', [App\Http\Controllers\MapelController::class, 'index'])->name('mapel');

Route::get('/admin/user-management', [UserAdminController::class, 'index'])->name('user-management');
Route::get('/admin/user-management/form', [UserAdminController::class, 'form'])->name('user-management.form');

Route::get('/admin/lembaga/mas', [LembagaController::class, 'mas'])->name('lembaga.mas');
Route::get('/admin/lembaga/pkbm', [LembagaController::class, 'pkbm'])->name('lembaga.pkbm');
Route::get('/admin/lembaga/form', [LembagaController::class, 'form'])->name('lembaga.form');

Route::get('/admin/kelas/pkbm-nurul-fata', [KelasController::class, 'pkbm'])->name('kelas.pkbm');
Route::get('/admin/kelas/mas-al-mustofawiyyah', [KelasController::class, 'mas'])->name('kelas.mas');

Route::get('/admin/laporan', [LaporanController::class, 'index'])->name('laporan');

Route::get('/admin/asesment', [AsesmentController::class, 'index'])->name('asesment');