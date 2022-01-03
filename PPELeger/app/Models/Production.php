<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $table = 'PRODUCTION';

    protected $primaryKey = ['MEDICCode', 'DateProd'];
    public $incrementing = false;

    protected $connection = 'mysql';
    use HasFactory;

    public function medicaments() {
        return $this->belongsTo(Medicaments::class, 'MEDICCode', 'MEDICCode');
    }
}
