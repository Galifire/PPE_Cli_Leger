<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacieController extends Controller
{

    public function show() {
        $query = DB::table('PHARMACIE')->get();
        return $query;
    }

}
