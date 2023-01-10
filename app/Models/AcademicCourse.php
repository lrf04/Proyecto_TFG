<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function courses(){
        return $this->hasMany(Course::class, 'academic_course_id', 'id');
    }
}
