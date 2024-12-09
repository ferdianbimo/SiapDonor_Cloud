<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\InformationController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information');

Route::get('/donation', [App\Http\Controllers\DonationController::class, 'index'])->name('donation');

Route::get('getDonors', [DonationController::class,
'getData'])->name('donors.getData');

Route::get('action/{donor}', [DonationController::class, 'show'])->name('action.show');
Route::get('action/{donor}/edit', [DonationController::class, 'edit'])->name('action.edit');
Route::delete('action/{donor}', [DonationController::class, 'destroy'])->name('action.destroy');
