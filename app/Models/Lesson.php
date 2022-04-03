<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['external_id'];

    public function class_group()
    {
        return $this->belongsTo(ClassGroup::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function attendence_lessons()
    {
        return $this->hasMany(AttendanceLesson::class);
    }
}
