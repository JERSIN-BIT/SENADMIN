<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    use HasFactory;

    public function teacher()
        {
            return $this->hasMany(Teacher::class);
        }

    public function course()
        {
            return $this->hasMany(Course::class);
        }

        protected $fillable = ['name','location'];

}
