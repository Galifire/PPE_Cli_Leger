<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $table = 'COMMANDES';

    protected $primaryKey = ['MEDICNum', 'MEDNum', 'CLINum', 'DateCde'];
    public $incrementing = false;

    protected $connection = 'mysql';
    public $timestamps = false;

    use HasFactory;

    public function Medicament() {
        return $this->belongsTo(Medicaments::class, 'MEDICNum', 'MEDICNum');
    }

    public function Medecin() {
        return $this->belongsTo(Medecins::class, 'MEDNum', 'MEDNum');
    }

    public function Client() {
        return $this->belongsTo(Clients::class, 'CLINum', 'CLINum');
    }

}
