<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{

    use HasFactory;

    protected $table = 'CLIENTS';

    protected $primaryKey = 'CLINum';
    public $incrementing = true;

    protected $connection = 'mysql';
    protected $keyType = 'int';
    
    public $timestamps = false;

}
