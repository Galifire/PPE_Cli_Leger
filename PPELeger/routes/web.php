<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\MedicamentsController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\PharmacienController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\StocksController;

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
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/clients', [ClientsController::class, 'getClients'])->middleware(['auth'])->name('clients');

Route::get('/add-client', [ClientsController::class, 'addClient'])->name('add-client');
Route::post('/create-client', [ClientsController::class, 'createClient'])->name('create-client');

Route::get('/edit-client/{CLINum}', [ClientsController::class, 'editClient'])->name('edit-client');
Route::post('/update-client', [ClientsController::class, 'updateClient'])->name('update-client');

Route::get('/delete-client/{CLINum}', [ClientsController::class, 'deleteClient'])->name('delete-client');



Route::get('/commandes', [CommandesController::class])->name('commandes');

Route::get('/add-commande', [ClientsController::class, 'addCommande'])->name('add-commande');
Route::post('/create-commande', [CommandeController::class, 'createCommande'])->name('create-commande');



Route::get('/medecins', [MedecinsController::class, 'getMedecins'])->name('medecins');

Route::get('/add-medecin', [MedecinsController::class, 'addMedecin'])->name('add-medecin');
Route::post('/create-medecin', [MedecinsController::class, 'createMedecin'])->name('create-medecin');

Route::get('/edit-medecin/{MEDNum}', [MedecinsController::class, 'editMedecin'])->name('edit-medecin');
Route::post('/update-medecin', [MedecinsController::class, 'updateMedecin'])->name('update-medecin');

Route::get('/delete-medecin/{MEDNum}', [MedecinsController::class, 'deleteMedecin'])->name('delete-medecin');



Route::get('/medicaments', [MedicamentsController::class, 'getMedicaments'])->name('medicaments');

Route::get('/add-medicament', [MedicamentsController::class, 'addMedicament'])->name('add-medicament');
Route::post('/create-medicament', [MedicamentsController::class, 'createMedicament'])->name('create-medicament');

Route::get('/edit-medicament/{MEDICNum}', [MedicamentsController::class, 'editMedicament'])->name('edit-medicament');
Route::post('/update-medicament', [MedicamentsController::class, 'updateMedicament'])->name('update-medicament');

Route::get('/delete-medicament/{MEDICNum}', [MedicamentsController::class, 'deleteMedicament'])->name('delete-medicament');



Route::get("/pharmacies", function () {
    $pharmacies = \App\Http\Controllers\PharmacieController::show();
    return view('pharmacies', ["pharmacies" => $pharmacies]);
})->name('pharmacies');

Route::get("/pharmaciens", function () {
    $pharmaciens = \App\Http\Controllers\PharmacienController::show();
    return view('pharmaciens', ["pharmaciens" => $pharmaciens]);
})->middleware(['auth'])->name("pharmaciens");

Route::get('/pharmacies/{PHARCode}', function ($code) {
    $pharmaciens = \App\Http\Controllers\PharmacienController::findByPharmacieId($code);
    return view('effectifInPharmacie', ["pharmaciens" => $pharmaciens]);
})->where(["PHARCode" => "P[0-9]{3,}"])->middleware(['auth'])->name('effectifInPharmacie');

Route::get('/stocks', function () {
    $stocks = \App\Http\Controllers\StocksController::show();
    return view('stocks', ["stocks" => $stocks]);
})->middleware(['auth'])->name('stocks');


Route::get('/production', function () {
    $production = \App\Http\Controllers\ProductionController::show();
    return view('production', ["production" => $production]);
})->middleware(['auth'])->name('production');

require __DIR__.'/auth.php';
