<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


///////////////////////////////////////////////////////////////////////////////////////////////////////

//BUS
//Route Bus
Route::get('/bus', [BusController::class, 'index'])->name('buses.index');

// Create Bus
Route::get('/bus/create', [BusController::class, 'create'])->name('bus.create');
Route::post('/bus', [BusController::class, 'store'])->name('bus.store');

// Edit Bus
Route::get('/bus/{bus}/edit', [BusController::class, 'edit'])->name('bus.edit');
Route::put('/bus/{bus}/update', [BusController::class, 'update'])->name('bus.update');

// Delete Bus
Route::delete('/bus/{bus}/destroy', [BusController::class, 'destroy'])->name('bus.destroy');

/////////////////////////////////////////////////////////////////////////////////////////////////////////

//CUSTOMER
// Route Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customers.index');

// Create Customer
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');

// Edit Customer
Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{customer}/update', [CustomerController::class, 'update'])->name('customer.update');

// Delete Customer
Route::delete('/customer/{customer}/destroy', [CustomerController::class, 'destroy'])->name('customer.destroy');






Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

require __DIR__.'/auth.php';
