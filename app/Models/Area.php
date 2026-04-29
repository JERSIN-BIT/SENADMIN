<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    public function teacher()
        {
            return $this->hasMany(Teacher::class);
        }

    public function cource()
        {
            return $this->hasMany(Cource::class);
        }
}
