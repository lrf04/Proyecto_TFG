<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{
    use HasFactory;

    protected $fillable = [
        'configuration_id',
        'student_id',
        'fecha',
        'puntuacion'
    ];
    protected $table = 'Datum';

    

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function configuration(){
        return $this->belongsTo(Configuration::class);
    }

    public function datumClasses(){
        return $this->hasMany(DatumClass::class, 'datum_id', 'id');
    }

    public function datumRecreo(){
        return $this->hasOne(DatumRecreo::class, 'datum_id', 'id');
    }

}
