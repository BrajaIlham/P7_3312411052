<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ProductController; // ← Tambahin ini untuk controller baru

Route::get('/home', function () {
    return view('pages.home');
});


Route::get('/', [HomeController::class, 'index']);

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Route dengan prefix 'admin'
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

Route::get('/listbarang/id/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

// Route untuk halaman kontak
Route::get('/contact', [HomeController::class, 'contact']);

// Route baru untuk ProductController
Route::get('/products', [ProductController::class, 'index']);
