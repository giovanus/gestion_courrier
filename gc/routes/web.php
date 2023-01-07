<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SaveController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('acc', function () {
    return view('index');
});

Route::get('boîte', function () {
    return view('liste');
})->name('liste');

Route::get('save_courrier', function () {
    return view('sv');
})->name('save');

Route::post('save', [SaveController::class, 'create'])->name('save2');
Route::get('pdf', [PdfController::class, 'index'])->name('pdf');
