<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViewBarangController;
use App\Http\Controllers\ViewRecordController;
use App\Http\Controllers\StockController;
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

// Route Utama
Route::get('/', function () 
{
    return view('home.section');
});

// Middleware untuk validasi tidak kembali login ketika sudah login
Route::get('/home', function () {
    return redirect('/admin');
});

// Route Login & Logout Session
Route::middleware(['guest'])->group(function () 
{
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
});

// Route Authentication User
Route::middleware(['auth'])->group(function () 
{
    // Logout
    Route::get('/logout', [SessionController::class, 'logout']);

    // Route untuk User & Admin
    Route::middleware('userAccess:admin')->group(function () 
    {
        Route::get('/admin', [AdminController::class, 'admin']);
        Route::resource('/transaksi', TransactionController::class);
        Route::resource('/barang', BarangController::class);
        Route::resource('/users', UsersController::class);
        Route::post('/register', [SessionController::class, 'store']);
        Route::get('/register', [SessionController::class, 'create']);
        Route::get('/admin', [StockController::class, 'index']);
        Route::get('generate/{id}', [TransactionController::class, 'transactionPDF']);
        Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
        Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
        Route::delete('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    });

    // Route untuk User
    Route::middleware('userAccess:user')->group(function () 
    {
        Route::get('/user', [AdminController::class, 'user']);
        Route::resource('/view', ViewBarangController::class);
        Route::resource('/record', ViewRecordController::class);
        Route::get('filter', [ViewRecordController::class, 'index'])->name('filter');
        Route::get('excel', [ViewRecordController::class, 'exportExcel'])->name('excel');
        Route::get('/export-to-excel', [StockController::class, 'exportExcel'])->name('export-to-excel');
        Route::get('/stock', [StockController::class, 'showStock']);
    });
});