<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    public function evento() {
        return $this->belongsTo(evento::class);
    }
}
