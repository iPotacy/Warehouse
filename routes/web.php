<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () 
{
    return view('welcome');
});
// Route untuk Login & logout Session
Route::middleware(['guest'])->group( function()
{
    Route::get('/',[SessionController::class, 'index'])->name('login');
    Route::post('/',[SessionController::class, 'login']);
});

// Validation untuk tidak kembali login ketika sudah login
Route::get('/home', function()
{
    return redirect('/admin');
});

// Route Authentication User
Route::middleware(['auth'])->group(function()
{
    // Logout
    Route::get('/logout',[SessionController::class, 'logout']);
    // Route untuk User & Admin
    Route::get('/admin',[AdminController::class, 'admin'])->middleware('userAccess:admin');
    Route::get('/user',[AdminController::class, 'user'])->middleware('userAccess:user');
});

Route::resource('/transaksi', TransactionController::class);

// Route view for Admin
// Route::get('/admin', [barangController::class, 'index']);

// Route view for User
// Route::get('/user', [barangController::class, 'index']);
// Route::get('/user/cekBarangIn', [barangController::class, 'viewBarang']);

