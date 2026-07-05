<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher', 'teacher_id', 'course_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function trainingCenter()
    {
        return $this->belongsTo(Training_center::class);
    }

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];
}

