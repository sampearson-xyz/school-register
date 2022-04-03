<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['external_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function class_groups()
    {
        return $this->belongsToMany(ClassGroup::class, 'class_groups_students');
    }

    public function attendence()
    {
        return $this->belongsToMany(Lesson::class, 'attendence_lessons');
    }

    public function attendence_lessons()
    {
        return $this->hasMany(AttendanceLesson::class);
    }
}
