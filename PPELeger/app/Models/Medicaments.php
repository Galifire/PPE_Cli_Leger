<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicaments extends Model
{
    protected $table = 'Medicaments';

    protected $primaryKey = 'MEDICCode';
    public $incrementing = false;

    protected $connection = 'sqlite';
    use HasFactory;
}
