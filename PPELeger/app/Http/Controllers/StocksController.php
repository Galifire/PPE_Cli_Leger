<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stocks;
class StocksController extends Controller
{
    public function show() {
        return Stocks::all();
    }
}
