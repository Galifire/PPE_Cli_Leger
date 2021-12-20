<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'CLIENTS';
    protected $primaryKey = 'CLINum';
    protected $keyType = "int";

    public $incrementing = true;

    protected $connection = 'mysql';

    public function showClients() {
        $clients = DB::table('CLIENTS')->get();
        return $clients;        
    }
}
