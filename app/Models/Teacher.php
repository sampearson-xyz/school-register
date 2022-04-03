<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['external_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function class_groups()
    {
        return $this->hasMany(ClassGroup::class);
    }

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
}
