<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeCtrl;
use App\Http\Controllers\AboutCtrl;
use App\Http\Controllers\ContactCtrl;
use App\Http\Controllers\ProjectCtrl;
use App\Http\Controllers\SocmedCtrl;
use App\Http\Controllers\loginCtrl;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// middleware routes 
Route::middleware('auth')->group(function(){
    Route::post('/logout', [loginCtrl::class, 'logout'])->name('logout');
    // admin page
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/mastersiswa',SiswaController::class);
    // Route::resource('/mastersiswa/edit',[SiswaController::class,'edit']);
    Route::resource('/masterproject',ProjectController::class);
    Route::resource('/masterkontak',KontakController::class);
    Route::resource('/admin',AdminController::class);
    Route::get('/masterproject/create/{id}',[ProjectController::class, 'tambah'] )->name('tambah-project');
    Route::get('/masterkontak/create/{id}',[KontakController::class, 'tambah'] )->name('tambah-kontak');
    Route::get('/mastersiswa/{id_siswa}/hapus',[SiswaController::class,'hapus'])->name('mastersiswa.hapus');
    Route::get('/masterproject/{id_project}/hapus',[ProjectController::class,'hapus'])->name('masterproject.hapus');
    // Route::get('/masterkontak/{id_kntk}/hapus',[KontakController::class,'hapus'])->name('masterkontak.hapus');
});
// route guest
Route::middleware('guest')->group(function(){
    // web profile    
    Route::resource('/home',HomeCtrl::class);
    Route::resource('/about',AboutCtrl::class);
    Route::resource('/project',ProjectCtrl::class);
    Route::resource('/contact',ContactCtrl::class);
    Route::resource('/socmed',SocmedCtrl::class);
    // login controller
    Route::get('/login', [loginCtrl::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [loginCtrl::class, 'authenticate'])->name('auth');
});