<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'time',
        'timeFinish',
        'subject_id',
    ];

    public function day(){
        return $this->belongsTo(Day::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function data(){
        return $this->hasMany(Datum::class, 'period_id', 'id');
    }
}
