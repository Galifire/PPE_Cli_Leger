<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model
{
    protected $table = 'PHARMACIEN';

    protected $primaryKey = 'PHNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    protected $keyType = 'int';
    use HasFactory;
    public $timestamps = false;

    public function Pharmacie() {
        return $this->hasOne(Pharmacie::class, 'PHARNum', 'PHARNum');
    }
}
