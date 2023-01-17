<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'age',
        'tdah',
        'description',
        'hobbies',
        'course_id',
    ];

   /*  public function course(){
        return $this->belongsTo(Course::class);
    } */

    public function data(){
        return $this->hasMany(Datum::class, 'student_id', 'id');
    }

    public function configurations(){
        return $this->hasMany(Configuration::class, 'student_id', 'id');
    }

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id');
    }

}
