<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training_centers extends Model
{
    use HasFactory;

    public function teacher()
        {
            return $this->hasMany(Teacher::class);
        }

    public function course()
        {
            return $this->hasMany(course::class);
        }
}
