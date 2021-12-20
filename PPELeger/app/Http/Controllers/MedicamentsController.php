<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicamentsController extends Controller
{
    public function show() {
        $query = DB::table('MEDICAMENTS')->get();
        return $query;
    }
}
