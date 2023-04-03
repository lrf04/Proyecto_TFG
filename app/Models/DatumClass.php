<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatumClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum_id',
        'periodo_id',
        'total_intervalos_movimiento',
        'total_nervioso_movimiento',
        'total_calmado_movimiento',
        'total_intervalos_ritmo',
        'total_nervioso_ritmo',
        'total_calmado_ritmo'
    ];
    protected $table = 'Datum_Class';

    public function datum(){
        return $this->belongsTo(Datum::class);
    }


}
