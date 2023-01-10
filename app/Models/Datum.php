<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{
    use HasFactory;

    protected $fillable = [
        'period_id',
        'student_id',
        'configuration_id',
    ];

    public function period(){
        return $this->belongsTo(Period::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function configuration(){
        return $this->belongsTo(Configuration::class);
    }
}
