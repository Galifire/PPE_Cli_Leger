<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function show() {
        return Production::all();
    }
}
