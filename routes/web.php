<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\VideoController;
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

//Accueil
Route::get('/', [VideoController::class,'index'])->name('videos');

Route::middleware('auth')->group(function() {

    
     Route::get('/dashboard',[VideoController::class, 'dashboard'])->name('dashboard');


                                    /** ROUTE IMAGE **/
     //Ajout image
     Route::get('/ajoutImage',[ImageController::class,'ajoutImage'])->name('ajoutImageVideos');

     //Stockage image
     Route::post('/stockImage',[ImageController::class,'stockImage'])->name('images.store');

     //Voir image
     Route::get('/vueImage',[ImageController::class,'vueImage'])->name('videos');

     //Edit video
     Route::get('/editVideo/{id}',[ImageController::class,'editVideo']);

     //Update video
     Route::post('/editVideo/{id}',[ImageController::class,'updateVideo']);

     //Delete video
     Route::get('/deleteVideo/{id}', [ImageController::class, "suppVideo"]);


                                /** FIN ROUTE IMAGE **/

                                /** ROUTE VIDEO **/
      Route::get('/', [ VideoController::class, 'index' ])->name('videos');
      Route::post('/stockVideo', [ VideoController::class, 'stockVideo' ])->name('store.video');
                                















 
    /* 
    EXEMPLE ROUTE POUR TACHE

    /* Route ajouter */
    //Route::post('/listeDeTaches',[TacheController::class, 'ajouterTache']);
   
    /* Route modifier et update */
    //Route::get('/listeDeTaches/edit/{id}', [TacheController::class, "edit"]);
    //Route::post('/listeDeTaches/edit/{id}', [TacheController::class, "update"]);

    /* Route supprimer */
    //Route::get('/listeDeTaches/delete/{id}', [TacheController::class, "delete"]);  */



});



require __DIR__.'/auth.php';
