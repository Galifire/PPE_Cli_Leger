<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'Clients';

    protected $primaryKey = 'CLINum';
    public $incrementing = true;

    protected $connection = 'sqlite';
    protected $keyType = 'int';
    use HasFactory;

}
