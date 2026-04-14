<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    use HasFactory;

    public function teachers()
        {
            return $this->hasMany(teachers::class);
        }

    public function cources()
        {
            return $this->hasMany(cources::class);
        }
}
