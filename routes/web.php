<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('image-with-dynamic-table', 'components.image-with-dynamic-table')->name('image-with-dynamic-table');
Route::view('compress-image', 'components.compress-image')->name('compress-image');
Route::view('order-invoice', 'components.order-invoice-html')->name('order-invoice');
Route::view('courier-invoice', 'components.courier-invoice')->name('courier-invoice');
Route::view('courier-barcode', 'components.courier-barcode')->name('courier-barcode');
Route::match(['get','post'], 'login', [MasterController::class, 'login'])->name('login');