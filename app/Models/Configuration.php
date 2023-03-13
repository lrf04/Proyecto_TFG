<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'lower_heart_rate',
        'higher_heart_rate',
        'movement_monitoring_time',
        'movement_percentage',
        'no_movement_monitoring_time',
        'no_movement_percentage',
        'higher_rate',
        'lower_rate',
        'lower_movement',
        'higher_movement',
        'higher_rate_movement',
        'lower_rate_movement',
        'higher_rate_lower_movement',
        'lower_rate_higher_movement',
        'no_movement',
        'proximity',
        'time',
        'lower_proximity_higher_rate',
        'lower_proximity_lower_rate',
        'higher_proximity_lower_time',
        'student_id',
        'activar',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function data(){
        return $this->hasMany(Datum::class, 'configuration_id', 'id');
    }
}
