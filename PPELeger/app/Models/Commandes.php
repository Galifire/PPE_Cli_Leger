<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Commandes extends Model
{
    use HasFactory;

    protected $table = 'COMMANDES';

    protected $connection = 'mysql';

    public function showCdes() {
        $cdes = DB::table('COMMANDES')->get();
        return $cdes;
    }
}
