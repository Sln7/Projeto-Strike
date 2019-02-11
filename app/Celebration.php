<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celebration extends Model
{
    protected $fillable = [
        'name', 'date', 'description', 'photo',
    ];
}
