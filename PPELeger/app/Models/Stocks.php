<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Stocks extends Model
{
    use HasFactory;

    protected $table = 'STOCKS';
    protected $primaryKey = 'PHARCode';
    protected $keyType = "string";

    public $incrementing = false;

    protected $connection = 'mysql';

    public function showStocks() {
        $stocks = DB::table('STOCKS')->get();
        return $stocks;
    }
}
