<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
  protected $table = 'organizations';

  protected $fillable = [
      'title',
      'description'
  ];

  public function workers()
  {
    return $this->hasMany(Worker::class);
  }
}
