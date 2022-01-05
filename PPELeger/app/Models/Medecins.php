<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
    protected $table = 'MEDECINS';

    protected $primaryKey = 'MEDNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    protected $keyType = 'int';
    use HasFactory;
}
