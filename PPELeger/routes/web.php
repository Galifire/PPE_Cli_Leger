<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/pharmacies", function () {
    $pharmacies = \App\Models\Pharmacie::showPharmacies();
    return view('pharmacies', ["pharmacies" => $pharmacies]);
})->name('pharmacies');

Route::get("/pharmaciens", function () {
    $pharmaciens = \App\Models\Pharmacien::showPharmaciens();
    return view('pharmaciens', ["pharmaciens" => $pharmaciens]);
})->name("pharmaciens");

Route::get('/pharmacies/{PHARCode}', function ($code) {
    $pharmaciens = \App\Models\Pharmacien::findByPharmacieId($code);
    return view('effectifInPharmacie', ["pharmaciens" => $pharmaciens]);
})->where(["PHARCode" => "P[0-9]{3,}"])->name('effectifInPharmacie');

Route::get('/medicaments', function () {
    $medics = \App\Models\Medicaments::showMedics();
    return view('medicaments', ["medics" => $medics]);
})->name('medicaments');

Route::get('/commandes', function () {
    $cdes = \App\Models\Commandes::showCdes();
    return view('commandes', ["cdes" => $cdes]);
})->name('commandes');

Route::get('/stocks', function () {
    $stocks = \App\Models\Stocks::showStocks();
    return view('stocks', ["stocks" => $stocks]);
})->name('stocks');

Route::get('/clients', function () {
    $clients = \App\Models\Clients::showClients();
    return view('clients', ["clients" => $clients]);
})->name('clients');

Route::get('/medecins', function () {
    $medecins = \App\Models\Medecins::showMedecins();
    return view('medecins', ["medecins" => $medecins]);
})->name('medecins');

Route::get('/production', function () {
    $production = \App\Models\Production::showProduction();
    return view('production', ["production" => $production]);
})->name('production');

require __DIR__.'/auth.php';
