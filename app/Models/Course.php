<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'academic_course_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function academicCourse()
    {
        return $this->belongsTo(AcademicCourse::class);
    }

    public function planification(){
        return $this->hasOne(Planification::class, 'course_id', 'id');
    }

    public function subjects(){
        return $this->hasMany(Subject::class, 'course_id', 'id');
    }

    /* public function students(){
        return $this->hasMany(Student::class, 'course_id', 'id');
    } */

    public function students(){
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }
}
