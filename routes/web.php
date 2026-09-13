<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertiController;

Route::get('/', function () {
    return view('customer.beranda');
});

// Rute untuk daftar properti
Route::get('/properti', [PropertiController::class, 'indexCustomer']);

// Rute untuk detail properti
Route::get('/properti/{id}', [PropertiController::class, 'detailCustomer']);

Route::get('/kontak', function () {
    return view('customer.kontak');
});

// Rute untuk memproses data form konsultasi (POST)
Route::post('/kontak', [PropertiController::class, 'storeKonsultasi']);

// Rute Dashboard Admin Properti
Route::get('/admin/properti', [PropertiController::class, 'indexAdmin']);

// Rute Form Tambah Properti (GET)
Route::get('/admin/properti/tambah', [PropertiController::class, 'create']);

// Rute Simpan Properti Baru (POST)
Route::post('/admin/properti', [PropertiController::class, 'store']);

// Rute Form Edit (GET)
Route::get('/admin/properti/{id}/edit', [PropertiController::class, 'edit']);

// Rute Update Properti (PUT)
Route::put('/admin/properti/{id}', [PropertiController::class, 'update']);

// Rute Hapus Properti (DELETE)
Route::delete('/admin/properti/{id}', [PropertiController::class, 'destroy']);

// Rute untuk melihat pesan konsultasi pelanggan di admin
Route::get('/admin/konsultasi', [PropertiController::class, 'indexKonsultasi']);

Route::get('/profil', function () {
    return view('customer.profil');
});