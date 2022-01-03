<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $table = 'Commandes';

    protected $primaryKey = ['MEDICCode', 'MEDNum', 'CLINum', 'DateCde'];
    public $incrementing = false;

    protected $connection = 'sqlite';

    use HasFactory;

    public function medicaments() {
        return $this->belongsTo(Medicaments::class, 'MEDICCode', 'MEDICCode');
    }

    public function medecins() {
        return $this->belongsTo(Medecins::class, 'MEDNum', 'MEDNum');
    }

    public function clients() {
        return $this->belongsTo(Clients::class, 'CLINum', 'CLINum');
    }

}
