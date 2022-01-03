<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicaments;

class MedicamentsController extends Controller
{
    public function show() {
        return Medicaments::all();
    }
}
