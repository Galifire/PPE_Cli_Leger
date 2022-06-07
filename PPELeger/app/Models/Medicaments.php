<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicaments extends Model
{
    protected $table = 'MEDICAMENTS';

    protected $primaryKey = 'MEDICNum';
    public $incrementing = true;

    protected $connection = 'mysql';
    public $timestamps = false;
    use HasFactory;
}
