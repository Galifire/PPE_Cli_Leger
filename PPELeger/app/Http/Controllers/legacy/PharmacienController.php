<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PharmacienController extends Controller
{
    public function show() {
        $query = DB::table('PHARMACIEN')->get();
        return $query;
    }

    public function findByPharmacieId(string $code) {
        $pharmaciens = DB::table('PHARMACIEN')->where('PHARCode', $code)->get();
        return $pharmaciens;
    }

}
