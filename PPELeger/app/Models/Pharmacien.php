<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model
{
    protected $table = 'PHARMACIEN';

    protected $primaryKey = 'PHARNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    protected $keyType = 'int';
    use HasFactory;

    public function Pharmacie() {
        return $this->hasOne(Pharmacie::class, 'PHARCode', 'PHARCode');
    }
}
