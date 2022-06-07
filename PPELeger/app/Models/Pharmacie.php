<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    protected $table = 'PHARMACIE';

    protected $primaryKey = 'PHARNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    public $timestamps = false;
    use HasFactory;
}
