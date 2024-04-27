<?php

use App\Http\Controllers\FormateurController;
use App\Http\Controllers\formateurGroupeController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\RechercherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\StagiaireController;

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
    return view('layout');
});

Route::resource('filieres',FiliereController::class);
Route::resource('groupes',GroupeController::class);
Route::resource('stagiaires',StagiaireController::class);
Route::resource('formateurs',FormateurController::class);

// Route.get('RecherchGroupeStagiaireAnneeFormateur',[RechercherController])
Route::get('/Recherche', function () {
    return view('recherche.index');
})->name('Recherche');

Route::get('/Recherche/RechercheGroupeStagiairesAnneeFormation',
            [RechercheController::class , 'RechercheGroupeStagiairesAnneeFormation']
        )->name('Recherche.RechercheGroupeStagiairesAnneeFormation');

Route::get('/Recherche/RechercheStagiairesParGroupe',
            [RechercheController::class , 'RechercheGroupe']
        )->name('Recherche.RechercheGroupe');

Route::post('/Recherche/RechercheStagiairesParGroupe',
            [RechercheController::class , 'RechercheStagiairesParGroupe']
        )->name('Recherche.RechercheStagiairesParGroupe');

Route::get('/Recherche/RechercheFormateurParMatricule',
            [RechercheController::class , 'RechercheFormateur']
        )->name('Recherche.RechercheFormateur');
        // recherche.
Route::post('/Recherche/RechercheFormateurParMatricule',
            [RechercheController::class , 'RechercheFormateurParMatricule']
        )->name('Recherche.RechercheFormateurParMatricule');
        // 
 Route::get('Recherche/RechercheNbstagairePargroupe',
        [RechercheController::class , 'RechercheNbstagairePargroupe']
    )->name('Recherche.RechercheNbstagairePargroupe');

Route::get('Recherche/RechercherFormateurMaxsalaire',
    [RechercheController::class , 'RechercherFormateurMaxsalaire']
)->name('Recherche.RechercherFormateurMaxsalaire');
// RechercheFormateurParsalaireRechercheFormateurTranchsalaire
Route::get('/Recherche/RechercheFormateurParsalaire',
            [RechercheController::class , 'RechercheFormateurParsalaire']
        )->name('Recherche.RechercheFormateurParsalaire');
        // recherche.
Route::post('/Recherche/RechercheFormateurParsalaire',
            [RechercheController::class , 'RechercheFormateurTranchsalaire']
        )->name('Recherche.RechercheFormateurTranchsalaire');

Route::get('/formateursGroupes', [FormateurGroupeController::class, 'index'])->name('formateursGroupes.index');

Route::get('/formateursGroupes/create', [FormateurGroupeController::class, 'create'])->name('formateursGroupes.create');
        
Route::post('/formateursGroupes/store', [FormateurGroupeController::class, 'affecter'])->name('formateursGroupes.affecter');
        
 Route::delete('/formateursGroupes/{id}', [FormateurGroupeController::class, 'destroy'])->name('formateursGroupes.destroy');
 Route::get('/formateursGroupes/{id}/edit',[FormateurGroupeController::class,'edit'])->name('formateursGroupes.edit');
Route::put('/formateursGroupes/update/{affectation}',[FormateurGroupeController::class,'update'])->name('formateursGroupes.update');

// destroy