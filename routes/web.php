<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/post', function () {
    return view('postingan.index');
});

Route::get('/dashboard/formulir', function () {
    return view('dashboard.formulir.index');
});

Route::post('/dashboard/post', [App\Http\Controllers\FormulirController::class,'store'])->name('simpan-formulir');
// Route::resource('/dashboard/post', FormulirController::class);
Route::get('/dashboard/post', [FormulirController::class, "Show"]);