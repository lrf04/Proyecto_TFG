<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatumRecreo extends Model
{
    use HasFactory;

    protected $fillable = [
        'datum_id',
        'periodo_id',
        'steps',
        'total_movimiento',
        'total_no_movimiento'
    ];

    protected $table = 'Datum_Recreo';

    public function datum(){
        return $this->belongsTo(Datum::class);
    }
}
