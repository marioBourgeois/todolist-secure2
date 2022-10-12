<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\DashboardController;

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


Route::get('/listeDeTaches', [TacheController::class,'index'])->name('listeDeTaches');

Route::middleware('auth')->group(function() {

    
    Route::get('/dashboard',[TacheController::class, 'dashboard'])->name('dashboard');

    /* Route ajouter */
    Route::post('/listeDeTaches',[TacheController::class, 'ajouterTache']);
   
    /* Route modifier et update */
    Route::get('/listeDeTaches/edit/{id}', [TacheController::class, "edit"]);
    Route::post('/listeDeTaches/edit/{id}', [TacheController::class, "update"]);

    /* Route supprimer */
    Route::get('/listeDeTaches/delete/{id}', [TacheController::class, "delete"]);



});



require __DIR__.'/auth.php';
