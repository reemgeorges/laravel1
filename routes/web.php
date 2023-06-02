<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\featureController;

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


Route::get('/features', [featureController::class, 'index'])->name('features.index');
Route::get('/features/create', [featureController::class, 'create'])->name('features.create');
Route::post('/features', [featureController::class, 'store'])->name('features.store');
