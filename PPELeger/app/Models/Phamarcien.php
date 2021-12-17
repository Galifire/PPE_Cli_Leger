<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pharmacien extends Model
{
    use HasFactory;

    protected $table = 'PHARMACIEN';
    protected $primaryKey = 'PHNum';
    protected $keyType = "int";

    public $incrementing = true;

    protected $connection = 'mysql';

    public function showPharmaciens() {
        $pharmaciens = DB::table('PHARMACIEN')->get();
        return $pharmaciens;
    }

    public function Pharmacie() {
        return $this->hasOne(Pharmacie::class, 'PHARCode', 'PHARCode');
    }
    
}
