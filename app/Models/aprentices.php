<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aprentices extends Model
{
    use HasFactory;

    protected $table = 'aprentices';

        public function cource()
            {
                return $this->belongsTo(cources::class);
            }

        public function computer()
            {
                return $this->belongsTo(computers::class);
            }
}
