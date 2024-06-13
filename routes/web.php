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
