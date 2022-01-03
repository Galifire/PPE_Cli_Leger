<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $table = 'Stocks';

    protected $primaryKey = ['PHARCode', 'MEDICCode'];
    public $incrementing = false;

    protected $connection = 'sqlite';

    use HasFactory;

    public function pharmacies() {
        return $this->belongsTo(Pharmacie::class, 'PHARCode', 'PHARCode');
    }

    public function medicaments() {
        return $this->belongsTo(Medicaments::class, 'MEDICCode', 'MEDICCode');
    }
}
