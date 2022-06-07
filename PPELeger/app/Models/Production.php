<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = 'PRODUCTION';

    protected $primaryKey = 'PRODNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    public $timestamps = false;
    
    use HasFactory;

    public function Medicament() {
        return $this->belongsTo(Medicaments::class, 'MEDICNum', 'MEDICNum');
    }
}
