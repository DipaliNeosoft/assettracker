<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/assettype', [App\Http\Controllers\HomeController::class, 'assettype'])->name('assettype');
    Route::get('/displaytype', [App\Http\Controllers\HomeController::class, 'displaytype'])->name('displaytype');
    Route::get('/edittype/{id}', [App\Http\Controllers\HomeController::class, 'edittype'])->name('edittype');
    Route::post('/postedittype/{id}', [App\Http\Controllers\HomeController::class, 'postedittype'])->name('postedittype');
    Route::post('/postassettype', [App\Http\Controllers\HomeController::class, 'postassettype'])->name('postassettype');
    Route::delete('/deletetype', [App\Http\Controllers\HomeController::class, 'deletetype'])->name('deletetype');
    Route::get('/assets', [App\Http\Controllers\HomeController::class, 'assets'])->name('assets');
    Route::get('/displayasset', [App\Http\Controllers\HomeController::class, 'displayasset'])->name('displayasset');
    Route::get('/editassets/{id}', [App\Http\Controllers\HomeController::class, 'editassets'])->name('editassets');
    Route::post('/postasset', [App\Http\Controllers\HomeController::class, 'postasset'])->name('postasset');
    Route::post('/posteditasset/{id}', [App\Http\Controllers\HomeController::class, 'posteditasset'])->name('posteditasset');
    Route::delete('/deleteasset', [App\Http\Controllers\HomeController::class, 'deleteasset'])->name('deleteasset');
    Route::get('/barchart', [App\Http\Controllers\HomeController::class, 'barchart'])->name('bar');
    Route::get('/piechart', [App\Http\Controllers\HomeController::class, 'piechart'])->name('pie');



// Route::get('exportAsset', [App\Http\Controllers\HomeController::class, 'exportAsset'])->name('exportAsset');



