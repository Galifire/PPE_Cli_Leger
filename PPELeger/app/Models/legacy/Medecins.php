<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Medecins extends Model
{
    use HasFactory;

    protected $table = 'MEDECINS';
    protected $primaryKey = 'MEDNum';
    protected $keyType = "int";

    public $incrementing = true;

    protected $connection = 'mysql';

    public function showMedecins() {
        $meds = DB::table('MEDECINS')->get();
        return $meds;
    }
}
