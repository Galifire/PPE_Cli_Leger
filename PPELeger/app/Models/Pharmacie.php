<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    protected $table = 'PHARMACIE';

    protected $primaryKey = 'PHARCode';
    public $incrementing = false;

    protected $connection = 'mysql';
    use HasFactory;
}
