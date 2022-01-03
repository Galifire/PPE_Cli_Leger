<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
    protected $table = 'Medecins';

    protected $primaryKey = 'MEDNum';
    public $incrementing = true;

    protected $connection = 'sqlite';
    protected $keyType = 'int';
    use HasFactory;
}
