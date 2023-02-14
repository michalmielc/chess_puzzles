<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    protected $fillable = [
        'solved','attempts','updated_at'
    ];
}
