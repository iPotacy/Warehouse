<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ViewBarangController;
use App\Http\Controllers\ViewRecordController;
use Illuminate\Support\Facades\Route;


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
    return view('multiUser');
});

// Validation untuk tidak kembali login ketika sudah login
Route::get('/home', function()
{
    return redirect('/admin');
});

// Route untuk Login & logout Session
Route::middleware(['guest'])->group( function()
{
    Route::get('/login',[SessionController::class, 'index'])->name('login');
    Route::post('/login',[SessionController::class, 'login']);
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

// Admin 
Route::resource('/transaksi', TransactionController::class)->middleware('userAccess:admin');
Route::resource('/barang', barangController::class)->middleware('userAccess:admin');
Route::get('generate/{id}', [TransactionController::class, 'transactionPDF'])->middleware('userAccess:admin');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit')->middleware('userAccess:admin');

// User
Route::resource('/view', ViewBarangController::class)->middleware('userAccess:user');
Route::resource('/record', ViewRecordController::class);
Route::get('/record/month', [ViewRecordController::class, 'index']);