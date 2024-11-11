<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ChisiamoController;
use App\Http\Controllers\TerritorioController;
use App\Http\Controllers\ColtivazioniController;
use App\Http\Controllers\AnimaliController;
use App\Http\Controllers\ContattiController;
use App\Http\Controllers\AcquistaProdottiController;
use App\Http\Controllers\RecensioneController;
use App\Http\Controllers\SalameController;
use App\Http\Controllers\CacciatoreController;
use App\Http\Controllers\CoppaPancettaController;
use App\Http\Controllers\SalamelleController;
use App\Http\Controllers\CotechiniController;
use App\Http\Controllers\ProdottiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrdineController;
use App\Http\Controllers\ProdottoOrdinatoController;
use App\Http\Controllers\PrenotaController;

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

Route::get('/', [FrontController::class, 'getIndex'])->name('index');
Route::get('/chisiamo', [ChisiamoController::class, 'getHome'])->name('chisiamo');
Route::get('/territorio', [TerritorioController::class, 'getTerritorio'])->name('territorio');
Route::get('/coltivazioni', [ColtivazioniController::class, 'getColtivazioni'])->name('coltivazioni');
Route::get('/animali', [AnimaliController::class, 'getAnimali'])->name('animali');
Route::get('/contatti', [ContattiController::class, 'getContatti'])->name('contatti');

/*PRODOTTI*/
Route::get('/prodotti', [ProdottiController::class, 'getProdotti'])->name('prodotti');
Route::get('/salame', [SalameController::class, 'getSalame'])->name('salame');
Route::get('/cacciatore', [CacciatoreController::class, 'getCacciatore'])->name('cacciatore');
Route::get('/coppaepancetta', [CoppaPancettaController::class, 'getCoppaPancetta'])->name('coppaepancetta');
Route::get('/salamelle', [SalamelleController::class, 'getSalamelle'])->name('salamelle');
Route::get('/cotechini', [CotechiniController::class, 'getCotechini'])->name('cotechini');
Route::get('/prenota', [PrenotaController::class, 'getPrenota'])->name('prenota');

/*LOGIN, REGISTRAZIONE, UTENTI */
Route::resource('utente', AuthController::class);
Route::get('/user/authentication', [AuthController::class, 'authentication'])->name('utente.authentication');
Route::post('/user/login', [AuthController::class, 'login'])->name('utente.login');
Route::get('/user/profile', [AuthController::class, 'profile'])->name('utente.profile');
Route::get('/user/{id}/editProfile', [AuthController::class, 'editProfile'])->name('utente.editprofile');
Route::post('/user/{id}/updateProfile', [AuthController::class, 'updateProfile'])->name('utente.updateprofile');
Route::get('/user/{id}/editPassword', [AuthController::class, 'editPassword'])->name('utente.editpassword');
Route::post('/user/{id}/updatePassword', [AuthController::class, 'updatePassword'])->name('utente.updatepassword');
Route::get('/user/logout', [AuthController::class, 'logout'])->name('utente.logout');
Route::get('/user/logoutRequest', [AuthController::class, 'logoutRequest'])->name('utente.logoutrequest');
Route::get('/user/create', [AuthController::class, 'create'])->name('utente.create');
Route::post('/user/register', [AuthController::class, 'registration'])->name('utente.registration');

Route::get('/ajaxRegistrazione', [AuthController::class, 'ajaxRegistrazione']);

Route::resource('ordine', OrdineController::class);


/*MIDDELWARE: TUTTE LE ROUTES IN CUI DEVO GESTIRE UTENTE LOGGATO/NON LOGGATO */

Route::middleware(['authCustom'])->group(function () {
    
Route::get('/diconodinoi/create', [RecensioneController::class, 'create'])->name('diconodinoi.create');

Route::get('/ordine/{id}/destroy', [OrdineController::class, 'destroy'])->name('ordine.destroy.confirm');
Route::get('/ordine/{id}/destroy/confirm', [OrdineController::class, 'confirmDestroy'])->name('ordine.destroy');
Route::get('/user/ordinipersonali', [AuthController::class, 'ordinipersonali'])->name('utente.ordinipersonali');

Route::get('/acquistaprodotti/{id}/edit', [AcquistaProdottiController::class, 'edit'])->name('acquistaprodotti.edit');
Route::post('/acquistaprodotti/{id}/update', [AcquistaProdottiController::class, 'update'])->name('acquistaprodotti.update');
Route::get('/acquistaprodotti/{id}/destroy', [AcquistaProdottiController::class, 'destroy'])->name('acquistaprodotti.destroy');
Route::get('/acquistaprodotti/{id}/destroy/confirm', [AcquistaProdottiController::class, 'confirmDestroy'])->name('acquistaprodotti.destroy.confirm');
Route::get('/acquistaprodotti/create', [AcquistaProdottiController::class, 'create'])->name('acquistaprodotti.create');

Route::get('/ajaxProdotto', [AcquistaProdottiController::class, 'ajaxProdotto']);

});

Route::resource('acquistaprodotti', AcquistaProdottiController::class);
Route::resource('diconodinoi', RecensioneController::class);







