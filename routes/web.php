<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsulController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('sneat.html.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'tampil'])->middleware(['auth','verified']);
//route::post('/insert-konsul', [DashboardController::class, 'insertkonsul'])->name(['insertkonsul']);

Route::get('/form', [KonsulController::class,'index'])->middleware(['auth','verified']);
//Route::get('/index', [DashboardController::class, 'index']);
Route::get('/konsultasi', [KonsulController::class,'index'])->middleware(['auth','verified']);
Route::get('/konsultasi/create',[KonsulController::class,'create'])->middleware(['auth','verified']);
Route::post('/konsultasi/store', [KonsulController::class,'store'])->middleware(['auth','verified']);
Route::get('/konsultasi/{id}/edit', [KonsulController::class,'edit'])->middleware(['auth','verified']);
Route::put('/konsultasi/{id}', [KonsulController::class,'update'])->middleware(['auth','verified']);

Route::delete('/dashboard/{id_konsul}', [DashboardController::class,'delete'])->middleware(['auth','verified']);

Route::post('/form',[DashboardController::class,'form']);

require __DIR__.'/auth.php';
 