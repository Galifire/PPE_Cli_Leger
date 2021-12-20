<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medicaments extends Model
{
    use HasFactory;

    protected $table = 'MEDICAMENTS';
    protected $primaryKey = 'MedicCode';
    protected $keyType = "string";

    public $incrementing = false;

    protected $connection = 'mysql';

    public function showMedics() {
        $medic = DB::table('MEDICAMENTS')->get();
        return $medic;
    }
}