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
});

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
    $pharmaciens = \App\Http\Controllers\PharmacienController::findByPharmacieId($code);
    return view('effectifInPharmacie', ["pharmaciens" => $pharmaciens]);
})->where(["PHARCode" => "P[0-9]{3,}"])->name('effectifInPharmacie');

/*Route::get("/pompier/{NumCaserne}", function ($numCaserne) {
    $pompiers = \App\Models\Pompiers::findByCaserneId($numCaserne);
    return view('pompierInCaserne', ["pompiers" => $pompiers]);
})->where(["numCaserne" => "[0-9]{1,}"])->name('pompierInCaserne');*/
require __DIR__.'/auth.php';
