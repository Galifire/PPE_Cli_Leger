<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model
{
    protected $table = 'Pharmacien';

    protected $primaryKey = 'PHARNum';
    public $incrementing = true;

    protected $connection = 'sqlite';
    protected $keyType = 'int';
    use HasFactory;

    public function pharmacies() {
        return $this->hasOne(Pharmacie::class, 'PHARCode', 'PHARCode');
    }
}
