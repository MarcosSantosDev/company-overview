<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
  protected $table = 'workers';

  protected $fillable = [
      'organization_id',
      'name',
      'email'
  ];
}
