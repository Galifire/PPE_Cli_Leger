<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacien;

class PharmacienController extends Controller
{
    public function show() {
        return Pharmacien::all();
    }

    public function findByPharmacieId(string $code) {
        return Pharmacien::where('PHARCode', $code)->get();
    }
}
