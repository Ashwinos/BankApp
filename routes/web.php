<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\DepositeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'loginpage'])->name('loginpage');
Route::get('/', [RegistrationController::class, 'registrationpage'])->name('registrationpage');

Route::get('/home', [HomeController::class, 'homePage'])->name('homePage');

Route::get('/withdraw', [WithdrawController::class, 'withdrawPage'])->name('withdrawPage');
Route::get('/transfer', [TransferController::class, 'transferPage'])->name('transferPage');
Route::get('/deposite', [DepositeController::class, 'depositePage'])->name('depositePage');
Route::get('/statement', [StatementController::class, 'statementPage'])->name('statementPage');

Route::get('/attemptlogin', [LoginController::class, 'attemptLogin'])->name('attemptLogin');
Route::post('/createregistration', [RegistrationController::class, 'createRegistration'])->name('createRegistration');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/addamount', [BalanceController::class, 'addAmount'])->name('addAmount');
Route::post('/minusamount', [BalanceController::class, 'minusAmount'])->name('minusAmount');




