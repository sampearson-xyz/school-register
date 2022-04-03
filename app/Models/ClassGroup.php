<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassGroup extends Model
{
    use HasFactory;

    protected $fillable = ['external_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function teachers()
    {
        return $this->hasOne(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_groups_students');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

}
