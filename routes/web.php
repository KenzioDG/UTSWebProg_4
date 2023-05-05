<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CoffeeController;

Route::get('/transaction-history', [TransactionController::class, 'history']);

Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');

Route::get('/coffee-list', function() {
    return view('coffee-list');
})->name('coffee-list');

Route::post('/coffee-list/buy', [CoffeeController::class, 'buy'])->name('coffee.buy');
