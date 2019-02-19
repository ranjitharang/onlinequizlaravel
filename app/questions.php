<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    protected $fillable = [
    'name',
    'subject'
    'questions',
    'choices'
  ];
}
