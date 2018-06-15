<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    protected $table = 'organizations';
}
