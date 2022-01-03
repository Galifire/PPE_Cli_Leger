<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Production extends Model
{
    use HasFactory;

    protected $table = 'PRODUCTION';

    public $incrementing = false;

    protected $connection = 'mysql';

    public function showProduction() {
        $prod = DB::table('PRODUCTION')->get();
        return $prod;
    }
}
