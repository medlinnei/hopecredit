<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/credit',[\App\Http\Controllers\CreditController::class, 'index'])->name('credit.page');
Route::get('/invest',[\App\Http\Controllers\InvestController::class, 'index'])->name('invest.page');

Route::get('/about',[\App\Http\Controllers\AboutUsController::class, 'index'])->name('about.page');
Route::get('/documents',[\App\Http\Controllers\DocumentsController::class, 'index'])->name('documents');
Route::get('/credit-terms',[\App\Http\Controllers\CreditTermsController::class, 'index'])->name('credit.terms');
Route::get('/news',[\App\Http\Controllers\NewsController::class, 'index'])->name('news.page');

Route::get('/how-to-pay', function() {return view('question.how_to_pay');})->name('how.to.pay');
Route::get('/how-to-take', function() {return view('question.how_to_take');})->name('how.to.take');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'getNumber'])->name('get.number');
Route::post('/login/auth', [\App\Http\Controllers\LoginController::class, 'getNameInfo'])->name('get.name.info');
Route::post('/login/auth/loc', [\App\Http\Controllers\LoginController::class, 'getLocation'])->name('get.location');
