<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Pharmacie extends Model
{
    use HasFactory;

    protected $table = 'PHARMACIE';
    protected $primaryKey = 'PHARCode';
    protected $keyType = "string";

    public $incrementing = false;

    protected $connection = 'mysql';

    public function showPharmacies() {
        $pharmacies = DB::table('PHARMACIE')->get();
        return $pharmacies;
    }
}
