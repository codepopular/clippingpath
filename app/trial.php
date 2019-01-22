<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trial extends Model
{
  protected $table='trials';
  protected $fillable=['name','email','des','photo','photo1','photo2'];

}
