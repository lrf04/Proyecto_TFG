<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planification extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function days(){
        return $this->hasMany(Day::class, 'planification_id', 'id');
    }
}
