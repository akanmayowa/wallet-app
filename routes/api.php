<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('users', 'App\Http\Controllers\Api\UserController');
Route::resource('users/user-wallet-transaction', 'App\Http\Controllers\Api\UserController@userWalletTransactionDetails');


Route::resource('wallets', 'App\Http\Controllers\Api\WalletController');
Route::resource('wallets/user-wallet-details', 'App\Http\Controllers\Api\WalletController@usersWalletDetails');

Route::resource('transactions', 'App\Http\Controllers\Api\TransactionController');
Route::resource('transactions/wallet-counter', 'App\Http\Controllers\Api\TransactionController@walletCounter');
Route::resource('transactions/transfer-fund', 'App\Http\Controllers\Api\TransactionController@TransferFunds');



