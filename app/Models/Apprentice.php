<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

        public function cource()
            {
                return $this->belongsTo(Cource::class);
            }

        public function computer()
            {
                return $this->belongsTo(Computer::class);
            }
}
