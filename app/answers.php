<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answers extends Model
{
    protected $fillable = [
    'name',
    'subject',
    'answers' 
  ];
}
