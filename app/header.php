<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
  protected $table='headers';
  protected $fillable=['email','phone','header_logo'];
}
