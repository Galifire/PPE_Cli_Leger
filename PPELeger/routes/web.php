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



Route::get('/commandes', [CommandesController::class, 'getCommandes'])->name('commandes');

Route::get('/add-commande', [CommandesController::class, 'addCommande'])->name('add-commande');
Route::post('/create-commande', [CommandesController::class, 'createCommande'])->name('create-commande');

Route::get('/edit-commande/{CdeNum}', [CommandesController::class, 'editCommande'])->name('edit-commande');
Route::post('/update-commande', [CommandesController::class, 'updateCommande'])->name('update-commande');

Route::get('/delete-commande/{CdeNum}', [CommandesController::class, 'deleteCommande'])->name('delete-commande');



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



Route::get('/pharmacies', [PharmacieController::class, 'getPharmacies'])->name('pharmacies');

Route::get('/add-pharmacie', [PharmacieController::class, 'addPharmacie'])->name('add-pharmacie');
Route::post('/create-pharmacie', [PharmacieController::class, 'createPharmacie'])->name('create-pharmacie');

Route::get('/edit-pharmacie/{PHNum}', [PharmacieController::class, 'editPharmacie'])->name('edit-pharmacie');
Route::post('/update-pharmacie', [PharmacieController::class, 'updatePharmacie'])->name('update-pharmacie');

Route::get('/delete-pharmacie/{PHNum}', [PharmacieController::class, 'deletePharmacie'])->name('delete-pharmacie');



Route::get('/pharmaciens', [PharmacienController::class, 'getPharmaciens'])->name('pharmaciens');

Route::get('/add-pharmacien', [PharmacienController::class, 'addPharmacien'])->name('add-pharmacien');
Route::post('/create-pharmacien', [PharmacienController::class, 'createPharmacien'])->name('create-pharmacien');

Route::get('/edit-pharmacien/{PHNum}', [PharmacienController::class, 'editPharmacien'])->name('edit-pharmacien');
Route::post('/update-pharmacien', [PharmacienController::class, 'updatePharmacien'])->name('update-pharmacien');

Route::get('/delete-pharmacien/{PHNum}', [PharmacienController::class, 'deletePharmacien'])->name('delete-pharmacien');



Route::get('/productions', [ProductionController::class, 'getProductions'])->name('productions');

Route::get('/add-production', [ProductionController::class, 'addProduction'])->name('add-production');
Route::post('/create-production', [ProductionController::class, 'createProduction'])->name('create-production');

Route::get('edit-production/{PRODNum}', [ProductionController::class, 'editProduction'])->name('edit-production');
Route::post('update-production', [ProductionController::class, 'updateProduction'])->name('update-production');

Route::get('/delete-production/{PRODNum}', [ProductionController::class, 'deleteProduction'])->name('delete-production');



Route::get('/stocks', [StocksController::class, 'getStocks'])->name('stocks');

Route::get('/add-stock', [StocksController::class, 'addStock'])->name('add-stock');
Route::post('/create-stock', [StocksController::class, 'createStock'])->name('create-stock');

Route::get('/edit-stock/{StockNum}', [StocksController::class, 'editStock'])->name('edit-stock');
Route::post('/update-stock', [StocksController::class, 'updateStock'])->name('update-stock');

Route::get('/delete-stock/{StockNum}', [StocksController::class, 'deleteStock'])->name('delete-stock');

require __DIR__.'/auth.php';
