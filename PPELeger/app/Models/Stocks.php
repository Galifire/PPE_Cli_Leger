<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $table = 'STOCKS';

    protected $primaryKey = 'StockNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    public $timestamps = false;

    use HasFactory;

    public function Pharmacie() {
        return $this->belongsTo(Pharmacie::class, 'PHARNum', 'PHARNyl');
    }

    public function Medicament() {
        return $this->belongsTo(Medicaments::class, 'MEDICNum', 'MEDICNum');
    }
}
