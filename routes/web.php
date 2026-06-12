<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//halaman utama langsung ke login
Route::get('/',[AuthController::class,'show_Login'])->name('login');
//Prosses
Route::post('/login',[AuthController::class,'login'])->name('login.process');
//logout
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

//protect halaman products suapaya halaman resource hanya bisa di akses jika usernya berhasil login, jd tanpa login ga bisa membuka ini
Route::middleware('auth')->group(function(){
    Route::resource('products',ProductController::class);
});