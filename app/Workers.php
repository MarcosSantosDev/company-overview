<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    protected $fillable = [
        'id_company',
        'name',
        'email',
        'password'
    ];

    protected $table = 'users';
}
