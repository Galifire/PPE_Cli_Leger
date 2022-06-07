<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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

Route::get('/edit-post/{CLINum}', [ClientsController::class, 'editClient'])->name('edit-client');
Route::post('/update-client', [ClientsController::class, 'updateClient'])->name('update-client');

Route::get('/delete-client/{CLINum}', [ClientsController::class, 'deleteClient'])->name('delete-client');


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



Route::get('/clients/new', function () {
    return view('clientNew');
})->middleware(['auth'])->name('clientNew');

Route::get('/medicaments', function () {
    $medics = \App\Http\Controllers\MedicamentsController::show();
    return view('medicaments', ["medics" => $medics]);
})->middleware(['auth'])->name('medicaments');

Route::get('/commandes', function () {
    $cdes = \App\Http\Controllers\CommandesController::show();
    return view('commandes', ["cdes" => $cdes]);
})->middleware(['auth'])->name('commandes');

Route::get('/stocks', function () {
    $stocks = \App\Http\Controllers\StocksController::show();
    return view('stocks', ["stocks" => $stocks]);
})->middleware(['auth'])->name('stocks');



Route::get('/medecins', function () {
    $medecins = \App\Http\Controllers\MedecinsController::show();
    return view('medecins', ["medecins" => $medecins]);
})->middleware(['auth'])->name('medecins');

Route::get('/production', function () {
    $production = \App\Http\Controllers\ProductionController::show();
    return view('production', ["production" => $production]);
})->middleware(['auth'])->name('production');

require __DIR__.'/auth.php';
