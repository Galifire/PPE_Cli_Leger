<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandes;

class CommandesController extends Controller
{
    public function show() {
        return Commandes::all();
    }
}
